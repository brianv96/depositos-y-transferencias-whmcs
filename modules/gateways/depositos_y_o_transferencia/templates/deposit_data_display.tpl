<div>
    <p class="h5 text-left mb-3 mt-4 mt-md-0">{$gatewayName}</p>

    <ul class="list-unstyled text-left">
        {if $banco}
            <li>Entidad: {$banco}</li>
        {/if}
        {if $titular}
            <li>Titular: {$titular}</li>
        {/if}
        {if $tipodecuenta}
            <li>Tipo de cuenta: {$tipodecuenta}</li>
        {/if}
        {if $numerodecuenta}
            <li>Número de cuenta: {$numerodecuenta}</li>
        {/if}
        {if $sucursal}
            <li>Sucursal: {$sucursal}</li>
        {/if}
        {if $alias}
            <li>ALIAS: {$alias}</li>
        {/if}
        {if $cbu}
            <li>CBU: {$cbu}</li>
        {/if}
        {if $cuit}
            <li>CUIT: {$cuit}</li>
        {/if}
    </ul>

    {if $nota}
        <p class="small text-left">{$nota}</p>
    {/if}
</div>

<script type="text/javascript">
    // Oculta el botón de pago.
    document.querySelector('form[name="paymentfrm"] button').style.display = 'none';
</script>

