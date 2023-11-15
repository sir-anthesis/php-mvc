<?php

class Flasher
{
    public static function setFlash($msg, $stat, $type)
    {
        $_SESSION['flash'] = [
            'msg' => $msg,
            'stat' => $stat,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['flash']['stat'] . ' </strong> ' . $_SESSION['flash']['msg'] . '.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            unset($_SESSION['flash']);
        }
    }
}