<?php
function is_user()
{
    $ad = get_instance();
        $roleid = $ad->session->userdata('role_id');

        if ($roleid == 1) {
            $ad->session->unset_userdata('email');
            $ad->session->unset_userdata('id_user');
            $ad->session->unset_userdata('name');
            $ad->session->unset_userdata('role_id');
        }
}