<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Masuk";
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email Tidak Valid',
            'required' => 'Email Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Kata Sandi Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/topbar');
            $this->load->view('frontend/login');
            $this->load->view('_partials/clients');
            $this->load->view('_partials/js');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
        // var_dump($user);
        // die;
        //jika user ada
        if ($user) {
            //cek aktif
            if ($user['is_active'] == 1) {
                //cek role
                if ($user['role_id'] == 2) {
                    //cek pass
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'id_user' => $user['id_user'],
                            'nama' => $user['nama'],
                            'role_id' => $user['role_id'],
                            'is_member' => $user['is_member']
                        ];
                        $this->session->set_userdata($data);
                        // var_dump($data);
                        // die;
                        if ($user['is_member'] == 1) {
                            redirect('home');
                        } else {
                            redirect('home/membership');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Tidak Memiliki hak untuk Mengakses Halaman Ini</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda belum diaktivasi</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar</div>');
            redirect('auth');
        }
    }

    public function register()
    {
        $data['title'] = "Daftar";
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
            'valid_email' => 'Email Tidak Valid',
            'required' => 'Email Tidak Boleh Kosong!',
            'in_unique' => 'Email sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[konf-password]', [
            'required' => 'Password tidak boleh Kosong',
            'min_length' => 'Panjang Password harus lebih dari 8',
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('konf-password', 'Password', 'required|trim|matches[password]', [
            'required' => 'Password tidak boleh Kosong',
            'matches' => 'Password tidak sama'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/topbar');
            $this->load->view('frontend/register');
            $this->load->view('_partials/clients');
            $this->load->view('_partials/js');
        } else {
            $email = $this->input->post('email');
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nomor_hp' => htmlspecialchars($this->input->post('nomor', true)),
                'foto_user' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'view_password' => htmlspecialchars($this->input->post('password', true)),
                'role_id' => 2,
                'is_member' => 0,
                'is_active' => 0,
                'date_created' => time()
            ];
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('tb_user', $data);
            $this->db->insert('tb_token', $user_token);
            $this->_sendEmail($token, 'verify');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil dibuat.</div>');
            redirect('auth/register');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'redshop0990@gmail.com',
            'smtp_pass' => 'Qweewq123',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('resest003@gmail.com', 'EXIM Community');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {
            $this->email->subject('Verifikasi Akun');
            $this->email->message('
            <html>
            <head>
            <title></title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <style type="text/css">
                @media screen {
                    @font-face {
                        font-family: "Lato";
                        font-style: normal;
                        font-weight: 400;
                        src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: normal;
                        font-weight: 700;
                        src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: italic;
                        font-weight: 400;
                        src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: italic;
                        font-weight: 700;
                        src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
                    }
                }
        
                /* CLIENT-SPECIFIC STYLES */
                body,
                table,
                td,
                a {
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                }
        
                table,
                td {
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                }
        
                img {
                    -ms-interpolation-mode: bicubic;
                }
        
                /* RESET STYLES */
                img {
                    border: 0;
                    height: auto;
                    line-height: 100%;
                    outline: none;
                    text-decoration: none;
                }
        
                table {
                    border-collapse: collapse !important;
                }
        
                body {
                    height: 100% !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    width: 100% !important;
                }
        
                /* iOS BLUE LINKS */
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: none !important;
                    font-size: inherit !important;
                    font-family: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                }
        
                /* MOBILE STYLES */
                @media screen and (max-width:600px) {
                    h1 {
                        font-size: 32px !important;
                        line-height: 32px !important;
                    }
                }
        
                /* ANDROID CENTER FIX */
                div[style*="margin: 16px 0;"] {
                    margin: 0 !important;
                }
            </style>
        </head>
        
        <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
            <!-- HIDDEN PREHEADER TEXT -->
            <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Lato", Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> Kami senang dengan kehadiranmu disini! Bersiap untuk verifikasi akun anda. </div>
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <!-- LOGO -->
                <tr>
                    <td bgcolor="#DC143C" align="center">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DC143C" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                                    <h1 style="font-size: 48px; font-weight: 400; margin: 2;">Welcome!</h1> <img src=" https://img.icons8.com/clouds/100/000000/handshake.png" width="125" height="120" style="display: block; border: 0px;" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 0;">Pertama, silahkan verifikasi akunmu. Tekan tombol dibawah ini.</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td align="center" style="border-radius: 3px;" bgcolor="#DC143CB"><a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;">Konfirmasi Akun</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr> <!-- COPY -->
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 0;">Jika ada yang ditanyakan, silahkan balas email ini.</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 0;">Cheers,<br>EXIM Community Dev Team</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 30px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#FFECD1" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#f4f4f4" align="left" style="padding: 0px 30px 30px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;"> <br>
                                    <p style="margin: 0;">Silahkan abaikan pesan jika memang merasa tidak penting.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>
        ');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('
            <html>
            <head>
            <title></title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <style type="text/css">
                @media screen {
                    @font-face {
                        font-family: "Lato";
                        font-style: normal;
                        font-weight: 400;
                        src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: normal;
                        font-weight: 700;
                        src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: italic;
                        font-weight: 400;
                        src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
                    }
        
                    @font-face {
                        font-family: "Lato";
                        font-style: italic;
                        font-weight: 700;
                        src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
                    }
                }
        
                /* CLIENT-SPECIFIC STYLES */
                body,
                table,
                td,
                a {
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                }
        
                table,
                td {
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                }
        
                img {
                    -ms-interpolation-mode: bicubic;
                }
        
                /* RESET STYLES */
                img {
                    border: 0;
                    height: auto;
                    line-height: 100%;
                    outline: none;
                    text-decoration: none;
                }
        
                table {
                    border-collapse: collapse !important;
                }
        
                body {
                    height: 100% !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    width: 100% !important;
                }
        
                /* iOS BLUE LINKS */
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: none !important;
                    font-size: inherit !important;
                    font-family: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                }
        
                /* MOBILE STYLES */
                @media screen and (max-width:600px) {
                    h1 {
                        font-size: 32px !important;
                        line-height: 32px !important;
                    }
                }
        
                /* ANDROID CENTER FIX */
                div[style*="margin: 16px 0;"] {
                    margin: 0 !important;
                }
            </style>
        </head>
        
        <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
            <!-- HIDDEN PREHEADER TEXT -->
            <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Lato", Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> Hai ' . $this->input->post('email') .  ' pesai ini digunakan untuk reset passwordmu.</div>
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <!-- LOGO -->
                <tr>
                    <td bgcolor="#DC143C" align="center">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DC143C" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                                    <h1 style="font-size: 48px; font-weight: 400; margin: 2;">Welcome!</h1> <img src=" https://img.icons8.com/clouds/100/000000/lock.png" width="125" height="120" style="display: block; border: 0px;" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 0;">Silahkan Reset Passwordmu. Tekan tombol dibawah ini.</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td align="center" style="border-radius: 3px;" bgcolor="#DC143CB"><a href="' . base_url() . 'user/auth/resetpass?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;">Reset Password</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr> <!-- COPY -->
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 0;">Jika ada yang ditanyakan, silahkan balas email ini.</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 0;">Cheers,<br>EXIM Community Dev Team</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 30px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#FFECD1" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#f4f4f4" align="left" style="padding: 0px 30px 30px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;"> <br>
                                    <p style="margin: 0;">Silahkan abaikan pesan jika memang merasa tidak penting.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>
        ');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Sudah Logout</div>');
        redirect('home');
    }

    public function blocked()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('blocked', $data);
    }
}
