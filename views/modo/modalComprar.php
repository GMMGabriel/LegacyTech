                <div id="dialog_comprar">
                    <p>
                        Este produto será entregue neste endereço:
                    </p>
                    <p>
                        <?php echo($_SESSION["logradouro"].', '.$_SESSION["numero"].', '.$_SESSION["bairro"].', '.$_SESSION["cidade"].', '.$_SESSION["estado"].' - '.$_SESSION["cep"]); ?>
                    </p>
                    <input id="btnCancelarCompra" type="button" value="Cancelar">
                    <input id="btnConfirmarCompra" type="button" value="Confirmar compra">
                </div>