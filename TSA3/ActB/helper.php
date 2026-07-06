<?php
function clean_input($value)
{
    return trim((string) $value);
}

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}

function username_or_email_exists($conn, $username, $email)
{
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ? LIMIT 1");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $exists = $result->num_rows > 0;
    $stmt->close();

    return $exists;
}

function create_user($conn, $user)
{
    $passwordHash = password_hash($user["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare(
        "INSERT INTO users (first_name, middle_name, last_name, username, password, birthday, email, contact_number)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );

    if (!$stmt) {
        return false;
    }

    $stmt->bind_param(
        "ssssssss",
        $user["first_name"],
        $user["middle_name"],
        $user["last_name"],
        $user["username"],
        $passwordHash,
        $user["birthday"],
        $user["email"],
        $user["contact_number"]
    );

    $saved = $stmt->execute();
    $stmt->close();

    return $saved;
}

function get_user_by_username($conn, $username)
{
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    return $user ?: null;
}

function get_user_by_id($conn, $id)
{
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    return $user ?: null;
}

function password_is_valid($password, $user)
{
    if (!isset($user["password"])) {
        return false;
    }

    $savedPassword = (string) $user["password"];

    return password_verify($password, $savedPassword) || hash_equals($savedPassword, $password);
}

function update_user_password($conn, $userId, $password)
{
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");

    if (!$stmt) {
        return false;
    }

    $stmt->bind_param("si", $passwordHash, $userId);
    $updated = $stmt->execute();
    $stmt->close();

    return $updated;
}
