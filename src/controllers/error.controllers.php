            <div class="control-group">
                <?php   if (isset($errors['inscription'])):?>
                     <small class="ERROR-LAY RED-ERROR"><?= $errors['inscription'] ?></small>
                <?php endif; ?>
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="prenom">Prénom</Label>
                    <input class="input-sign-in" type="text"  name="prenom" id="prenom" class="login" placeholder="entrez votre prenom">
                    <?php  if (isset($errors['prenom'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                        <?php endif; ?>
                    </div>


                <!--//! nom -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="nom">Nom</Label>
                    <input class="input-sign-in" type="text"  name="nom" id="nom" class="login" placeholder="entrez votre prenom">
                </div>
                <?php /* gestion des erreurs */ if (isset($errors['nom'])):?>
                    <small class="ERROR-LAY RED-ERROR"><?= $errors['nom'] ?></small>
                <?php endif; ?>


                <!--//! login -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="login">Login</Label>
                    <input class="input-sign-in" type="email"  name="login" id="login" class="login" placeholder="entrez votre prenom">
                </div>
                <?php /* gestion des erreurs */ if (isset($errors['login'])):?>
                    <small class="ERROR-LAY RED-ERROR"><?= $errors['login'] ?></small>
                <?php endif; ?>


                <!--//! password1 -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password1">Password</Label>
                    <input class="input-sign-in" type="password"  name="password1" id="password1" class="login" placeholder="mot de passe">
                </div>


                <!--//! password2 -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password2">Confirm password</Label>
                    <input class="input-sign-in" type="password"  name="password2" id="password2" class="login" placeholder="confirmez votre mot de passe">
                </div>
                <?php /* //!gestion des erreurs de validation et de correspondance de deux mots de passe  */
                    if (isset($errors['password'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['password'] ?></small>
                <?php endif; ?>



                    <!--//! password2 -->
                    <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="file">Avatar</Label>
                    <input class="input-sign-in" type="file" name="file" id="file" placeholder="Choississez votre avatar">
                </div>

                   <!-- //!press on submit button -->
                   <div class="last-control">
                    <button id="connect" type="submit">S'inscrire</button>
                </div>
            </div>        
        </form>
    </div>