<?php include "parts/header.php"; ?>

<div class="container clearfix">
    <div class="row my-5">
        <div class="col-7">
            <table width="100%" class="table table-borderless">
                <tbody>
                <tr>
                    <th class="pb-4 fs-6"><strong>Alegeți metoda de livrare</strong></th>
                </tr>
                <tr>
                    <td valign="top" class="td-delivery-area ">
                        <table width="100%" cellspacing="2" cellpadding="2" class="w-basket-icons" id="basket_shipping_list">
                            <tbody>
                            <tr>
                                <td valign="top" class="e-basket-delivery-radio delivery-radio-default pb-4">
                                    <input id="carry_options_radio_2-basic_14043" class="carry_options_radio" type="radio" name="postovne_form" value="14043_basic">
                                    <input name="delivery_discount[carry_options_radio_2-basic_14043]" value="0" type="hidden">
                                </td>
                                <td class="pb-4">
                                    <label for="carry_options_radio_2-basic_14043">Curier rapid - Transport gratuit<span class="delivery-description2"></span><span class="delivery-discount-sale"></span>
                                    </label>
                                </td>
                                <td class="free-price-text" align="right" valign="top">0 LEI</td>
                            </tr>
                            <tr class="checked-method">
                                <td valign="top" class="e-basket-delivery-radio delivery-radio-default">
                                    <input id="carry_options_radio_1-basic_14042" class="carry_options_radio" type="radio" name="postovne_form" value="14042_basic">
                                    <input name="delivery_discount[carry_options_radio_1-basic_14042]" value="0" type="hidden">
                                </td>
                                <td>
                                    <label for="carry_options_radio_1-basic_14042">Transport curier rapid<span class="delivery-description2"></span><span class="delivery-discount-sale"></span>
                                    </label>
                                </td>
                                <td align="right" valign="top">18,00&nbsp;LEI</td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th class="pb-4 fs-6"><strong>Alegeți metoda de plată</strong></th>
                </tr>
                <tr>
                    <td class="td-payments-area " valign="top">
                        <table width="100%" cellspacing="2" cellpadding="2" class="w-basket-icons" id="basket_payments_list">
                            <tbody>
                            <tr class="">
                                <td valign="top" class="e-basket-payment-radio payment-radio-default pb-4"><label for="postovne_form2_3000_1"></label>
                                    <input id="postovne_form2_3000_1" type="radio" name="postovne_form2" value="1">
                                </td>
                                <td class="pb-4">
                                    <label for="postovne_form2_3000_1">Plata cash la curier</label>
                                </td>
                                <td align="right" valign="top" id="cena_dodani"><span class="free-price-text" id="cena_dodani_puvodni">0 LEI</span></td>
                            </tr>
                            <tr class="tr_payment_not_in_group">
                                <td valign="top" class="e-basket-payment-radio payment-radio-default"><label for="postovne_form2_3093"></label>
                                    <input id="postovne_form2_3093" type="radio" name="postovne_form2" value="3093">
                                </td>
                                <td>
                                    <label for="postovne_form2_3093">Plata cu card bancar prin Mobilpay™</label>
                                </td>
                                <td align="right"><span id="cena_dodani_puvodni" class="free-price-text">0 LEI</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class="td-delivery-payment-tail">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
        <div class="col-4">
            <table class="table">
                <thead class="table-active">
                    <tr>
                        <th scope="col" colspan="4">Lista de cumpărături</th>
                    </tr>
                </thead>
                <tbody class="text-center align-middle">
                <?php $cart = getCurrentCart(); ?>
                <?php  foreach ($cart->getCartItems() as $cartItem): ?>
                    <tr>
                        <th scope="row">
                            <img src="images/<?php echo $cartItem->getProduct()->getImages()->name; ?>" alt="missing product image">
                        </th>
                        <td><?php echo $cartItem->getProduct()->name; ?></td>
                        <td>
                            <div class="quantity clearfix me-0">
                                <form action="updateCartItem.php?id=<?php $cartItem->getId(); ?>" method="post">
                                    <input type="button" value="-" class="minus">
                                    <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty">
                                    <input type="button" value="+" class="plus">
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-12 ">
                                    <a href="deleteCartItem.php?id=<?php echo $cartItem->getId(); ?>"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12"><?php echo $cartItem->getProduct()->getPriceWithoutTva(); ?> LEI
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot class="table-active">

                    <tr>
                        <th colspan="3">Transport</th>
                        <th colspan="">pret LEI</th>
                    </tr>
                    <tr>
                        <th colspan="3">TOTAL fără TVA</th>
                        <th colspan="">pret LEI</th>
                    </tr>
                    <tr>
                        <th colspan="3">TOTAL cu TVA</th>
                        <?php if ($cart->getTotal() !== $cart->getFinalTotal()): ?>
                        <th colspan=""><?php $cart->getTotal(); ?> LEI</th>
                        <?php endif; ?>
                    </tr>
                </tfoot>
            </table>
            <div class="row">
                <div class="col-7"></div>
                <div class="col-5">
                    <button class="btn btn-dark px-4 py-2" type="submit">Actualizare Coș</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="position: fixed;left: 0; bottom: 0; width:100%; text-align: center">
    <div class="container clearfix border">
        <div class="row py-2">
            <div class="col-2 text-start align-middle my-2">
                <a href="index.php"><button type="button" class="btn btn-dark px-4 py-2"><strong>Înapoi în magazin</strong></button></a>
            </div>
            <div class="col-7"></div>
            <div class="col-3 text-end align-middle my-2">
                <?php if(count($cart->getCartItems())>0): ?>
                    <a href="checkout.php" class="btn btn-danger px-4 py-2"><strong>Finalizare Comandă</strong></a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>

