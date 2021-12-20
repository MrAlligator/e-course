<?php

function is_logged_in()
{
    $es = get_instance();
    if (!$es->session->userdata('email')) {
        redirect('home/membership');
    } else {
        $role_id = $es->session->userdata('role_id');

        if ($role_id != 2) {
            redirect('auth/blocked');
        }
    }
}

function is_admin()
{
    $adm = get_instance();
    if (!$adm->session->userdata('email')) {
        redirect('home');
    } else {
        $role = $adm->session->userdata('role_id');

        if ($role != 1) {
            redirect('auth/blocked');
        }
    }
}
