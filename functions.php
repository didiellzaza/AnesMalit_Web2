<?php
session_start();

function kyqur()
{
    if (isset($_SESSION['pid']) && !empty($_SESSION['pid'])) {
        return true;
    } else {
        return false;
    }
}
