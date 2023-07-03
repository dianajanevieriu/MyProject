<?php include "parts/header.php"; ?>

<div class="container clearfix">
    <div class="row my-5">
        <div class="col-7">
            <table width="100%" class="table table-borderless">
                <tbody>
                <tr>
                    <th class="pb-4 fs-6"><strong>Introduceți datele dvs.</strong></th>
                </tr>
                <tr>
                    <td>
                        <form method="post" action="processCheckout.php">
                            <?php if (getAuthUser()): ?>
                                <?php foreach (getAuthUser()->getAddresses() as $address): ?>
                                <p><strong>Date personale</strong></p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Prenumele şi numele de familie:</label>
                                        <input type="text" class="form-control" id="inputName" value="<?php echo $address->firstName." ".$address->lastName; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPhone">Telefon:</label>
                                        <input type="text" class="form-control" id="inputPhone" value="<?php echo $address->phone; ?>">
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">E-mail</label>
                                        <input type="email" class="form-control" id="inputEmail4" value="<?php echo $address->email; ?>">
                                    </div>
                                </div>
                                <p class="mt-3"><strong>Adresa de livrare</strong></p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Localitate si Județ:</label>
                                        <input type="text" class="form-control" id="inputState" value="<?php echo $address->city.", ".$address->state; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputZipCode">Cod poştal:</label>
                                        <input type="text" class="form-control" id="inputZipCode" value="<?php echo $address->zipCode; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Strada, numãrul, bloc, etaj, apartament..:</label>
                                        <input class="form-control" id="inputAddress" name="address[address]" value="<?php echo $address->address; ?>">
                                    </div>
                                </div>
                                    <?php endforeach; ?>
                            <?php else: ?>
                                <p><strong>Date personale</strong></p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Prenumele şi numele de familie:</label>
                                        <input type="text" class="form-control" id="inputName">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPhone">Telefon:</label>
                                        <input type="text" class="form-control" id="inputPhone">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">E-mail</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                </div>
                                <p class="mt-5"><strong>Adresa de livrare</strong></p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Localitate si Județ:</label>
                                        <input type="text" class="form-control" id="inputState">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputZipCode">Cod poştal:</label>
                                        <input type="text" class="form-control" id="inputZipCode">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Strada, numãrul, bloc, etaj, apartament..:</label>
                                        <input type="text" class="form-control" id="inputAddress">
                                    </div>
                                </div>
                            <?php endif; ?>

<!--                            <button type="submit" class="btn btn-primary">Sign in</button>-->
                        </form>
                    </td>
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
        </div>
    </div>
</div>

<div style="position: fixed;left: 0; bottom: 0; width:100%; text-align: center">
    <div class="container clearfix border">
        <div class="row py-2">
            <div class="col-2 text-start align-middle my-2">
                <a href="cart.php"><button type="button" class="btn btn-dark px-4 py-2"><strong>Înapoi la coș</strong></button></a>
            </div>
            <div class="col-7"></div>
            <div class="col-3 text-end align-middle my-2">
                <?php if(count($cart->getCartItems())>0): ?>
                    <a href="#" class="btn btn-danger px-4 py-2"><strong>Transmite Comanda</strong></a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>
