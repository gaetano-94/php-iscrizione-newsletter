<?php
// Funzione per validare l'indirizzo email
function validateEmail($email)
{
  // Controlla se l'email è ben formata
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Controlla se l'email contiene un punto e una chiocciola
    return (strpos($email, '.') !== false && strpos($email, '@') !== false);
  }
  return false;
}
