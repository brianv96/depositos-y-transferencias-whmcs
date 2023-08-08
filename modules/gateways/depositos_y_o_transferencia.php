<?php

use Smarty;

if (!defined('WHMCS')) {
    die;
}

/**
 * @return array
 */
function depositos_y_o_transferencia_MetaData()
{
    return [
        'DisplayName' => 'Datos para depósitos y/o transferencia',
        'APIVersion' => '1.1', // Use API Version 1.1
        'DisableLocalCreditCardInput' => true,
        'TokenisedStorage' => false,
    ];
}

/**
 * @return array
 */
function depositos_y_o_transferencia_config()
{
    return [
        'FriendlyName' => [
            'Type' => 'System',
            'Value' => 'Datos para depósitos y/o transferencia',
        ],

        'banco' => [
            'FriendlyName' => 'Entidad Bancaria',
            'Description' => '',
            'Type' => 'text',
            'Size' => '25',
        ],

        'titular' => [
            'FriendlyName' => 'Titular de Cuenta',
            'Description' => '',
            'Type' => 'text',
            'Size' => '25',
        ],

        'tipodecuenta' => [
            'FriendlyName' => 'Tipo de cuenta',
            'Description' => '',
            'Type' => 'text',
            'Size' => '25',
        ],

        'numerodecuenta' => [
            'FriendlyName' => 'Número de cuenta',
            'Description' => '',
            'Type' => 'text',
            'Size' => '25',
        ],

        'sucursal' => [
            'FriendlyName' => 'Sucursal',
            'Description' => '',
            'Type' => 'text',
            'Size' => '25',
        ],
        
        'alias' => [
            'FriendlyName' => 'ALIAS',
            'Description' => '',
            'Type' => 'text',
            'Size' => '25',
        ],
        
        'cbu' => [
            'FriendlyName' => 'CBU',
            'Description' => '',
            'Type' => 'text',
            'Size' => '25',
        ],
                
        'cuit' => [
            'FriendlyName' => 'CUIT',
            'Description' => '',
            'Type' => 'text',
            'Size' => '25',
        ],

        'nota' => [
            'FriendlyName' => 'Nota',
            'Description' => '',
            'Type' => 'text',
            'Size' => '255',
        ]
    ];
}

/**
 * @see https://developers.whmcs.com/payment-gateways/third-party-gateway/
 *
 * @param array $params Payment Gateway Module Parameters
 *
 * @return string
 */
function depositos_y_o_transferencia_link($params)
{
    $gatewayName = $params['name'];
    $banco = $params['banco'] ?? '';
    $titular = $params['titular'] ?? '';
    $tipodecuenta = $params['tipodecuenta'] ?? '';
    $numerodecuenta = $params['numerodecuenta'] ?? '';
    $sucursal = $params['sucursal'] ?? '';
    $alias = $params['alias'] ?? '';
    $cbu = $params['cbu'] ?? '';
    $cuit = $params['cuit'] ?? '';
    $nota = $params['nota'] ?? '';

    $smarty = new Smarty();
    $smarty->assign('gatewayName', $gatewayName);
    $smarty->assign('banco', $banco);
    $smarty->assign('titular', $titular);
    $smarty->assign('tipodecuenta', $tipodecuenta);
    $smarty->assign('numerodecuenta', $numerodecuenta);
    $smarty->assign('sucursal', $sucursal);
    $smarty->assign('alias', $alias);
    $smarty->assign('cbu', $cbu);
    $smarty->assign('cuit', $cuit);
    $smarty->assign('nota', $nota);

    return $smarty->fetch(__DIR__ . '/depositos_y_o_transferencia/templates/deposit_data_display.tpl');
}
