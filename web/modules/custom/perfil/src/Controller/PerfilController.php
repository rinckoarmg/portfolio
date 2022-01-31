<?php

namespace Drupal\perfil\Controller;

class PerfilController {
    public function content() {
        return [
            '#type' => 'markup',
            '#markup' => t('Este es el perfil de la empresa'),
        ];
    }
}