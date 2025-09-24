<?php

namespace Opencart\Admin\Controller\Extension\CartControl\Module;

/**
 * Class    cart_control  CartControl
 * 
 * @package  Opencart\Admin\Controller\Extension\CartControl\Module
 */
class CartControl extends \Opencart\System\Engine\Controller
{
    /**
     * Index 
     *
     * @return void
     */

    public function index(): void
    {
        $this->load->language('extension/cart_control/module/cart_control');
        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_hide_cart_button', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module'));
        }

        // Load saved values
        $data['module_hide_cart_button_type'] = $this->config->get('module_hide_cart_button_type') ?? 'quantity';
        $data['module_hide_cart_button_stock_status'] = $this->config->get('module_hide_cart_button_stock_status') ?? [];
        $data['module_hide_cart_button_status'] = $this->config->get('module_hide_cart_button_status');

        $this->load->model('localisation/stock_status');
        $data['stock_statuses'] = $this->model_localisation_stock_status->getStockStatuses();

        // Breadcrumbs
        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module')
        ];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/cart_control/module/cart_control', 'user_token=' . $this->session->data['user_token'])
        ];

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $data['action'] = $this->url->link('extension/cart_control/module/cart_control.save', 'user_token=' . $this->session->data['user_token']);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module');

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/cart_control/module/cart_control', $data));
    }

    public function save(): void
    {
        $this->load->language('extension/cart_control/module/cart_control');
        $this->load->model('setting/setting');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if (isset($this->request->post['module_hide_cart_button_type']) && $this->request->post['module_hide_cart_button_type'] === 'quantity') {
                $this->request->post['module_hide_cart_button_stock_status'] = [];
            }

            $this->model_setting_setting->editSetting('module_hide_cart_button', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect(
                $this->url->link('extension/cart_control/module/cart_control', 'user_token=' . $this->session->data['user_token'])
            );
        }
    }
}
