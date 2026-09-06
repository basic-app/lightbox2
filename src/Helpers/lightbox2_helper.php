<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use CodeIgniter\View\View;

if (!function_exists('register_lightbox2'))
{
    function register_lightbox2(array $params = [], ?View $renderer = null) : void
    {
        helper(['scripts', 'styles', 'jquery3', 'render_view']);
         
        register_jquery3($params['jquery3'] ?? [], $renderer);

        unset($params['jquery3']);

        add_style(render_view('BasicApp\Lightbox2\styles', $params, $renderer), true, $renderer);
        add_script(render_view('BasicApp\Lightbox2\scripts', $params, $renderer), true, $renderer);
    }
}