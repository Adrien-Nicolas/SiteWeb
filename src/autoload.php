<?php

/**
 * Cette fonction charge automatiquement les fichier .php
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});