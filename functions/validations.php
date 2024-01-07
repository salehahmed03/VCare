<?php

function validateName($name) {
    if (empty($name)) {
        return "Name is required.";
    }

    if (strlen($name) > 255) {
        return "Name cannot exceed 255 characters.";
    }

    if (!is_string($name)) {
        return "Name must be a string.";
    }

    return null; // No validation errors
}

function validateEmail($email) {
    if (empty($email)) {
        return "Email is required.";
    }

    if (strlen($email) > 255) {
        return "Email cannot exceed 255 characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }

    return null; // No validation errors
}

function validatePhone($phone) {
    if (empty($phone)) {
        return "Phone number is required.";
    }

    if (strlen($phone) > 255) {
        return "Phone number cannot exceed 255 characters.";
    }

    // Additional phone number validation rules can be added here

    return null; // No validation errors
}

function validatePassword($password) {
    if (empty($password)) {
        return "Password is required.";
    }

    if (strlen($password) > 255) {
        return "Password cannot exceed 255 characters.";
    }

    // Additional password validation rules can be added here

    return null; // No validation errors
}

function validateConfirmPassword($password, $confirmPassword) {
    if (empty($confirmPassword)) {
        return "Confirm password is required.";
    }

    if (strlen($confirmPassword) > 255) {
        return "Confirm password cannot exceed 255 characters.";
    }

    if ($password !== $confirmPassword) {
        return "Passwords do not match.";
    }

    return null; // No validation errors
}

function PrintPretty($array) {
    echo '<pre>'.print_r($array, true).'</pre>';
}





?>