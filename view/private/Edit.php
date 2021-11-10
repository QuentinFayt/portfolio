<?php
?>

<main>
    <h1 class="portfolioFont mainColor">Edit</h1>
    <article class="management">
        <section class="tableHead">
            <div>
                <p>ID</p>
            </div>
            <div>
                <p>Username</p>
            </div>
            <div>
                <p>Message</p>
            </div>
            <div>
                <p>Validation</p>
            </div>
            <div>

            </div>
        </section>
        <section class="tableMessages">
            <?php
            if (isset($messagesAdmin)) {
                foreach ($messagesAdmin as $messageAdmin) {
            ?>
                    <div class="userMessage">
                        <p><?= $messageAdmin["id"] ?></p>
                    </div>
                    <div class="userMessage">
                        <p><?= $messageAdmin["userGuestB"] ?></p>
                    </div>
                    <div>
                        <p class="editable"><?= $messageAdmin["textGuestB"] ?></p>
                        <form method="post">
                            <textarea class="updateArea" name="updateText"><?= $messageAdmin["textGuestB"] ?></textarea>
                            <input type="hidden" value="<?= $messageAdmin["id"] ?>" name="updateTextId" />
                            <button type="submit" class="buttonEdit">Update</button>
                            <a href="?p=Edit&private=true" class="buttonEdit">Cancel</a>
                        </form>
                    </div>
                    <?php
                    if (!$messageAdmin["validation"]) {
                    ?>
                        <div class="divButton">
                            <form method="post">
                                <input type="hidden" value="<?= $messageAdmin["id"] ?>" name="validate" />
                                <button type="submit" class="buttonEdit validate">Validate</button>
                            </form>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="divButton">
                            <form method="post">
                                <input type="hidden" value="<?= $messageAdmin["id"] ?>" name="Unvalidate" />
                                <button type="submit" class="buttonEdit cancel">Annuler</button>
                            </form>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="divButton">
                        <button class="buttonEdit deleteButton">Delete</button>
                        <form method="post" class="confirmForm">
                            <p>Are you sure?</p>
                            <input type="hidden" value="<?= $messageAdmin["id"] ?>" name="deleteId" />
                            <button type="submit" class="buttonEdit confirm">Yes</button>
                            <a href="?p=Edit&private=true" class="buttonEdit confirm">No</a>
                        </form>
                    </div>
                <?php
                }
            } else {
                ?>
                <div>
                    <p>1</p>
                </div>
                <div>
                    <p>Example</p>
                </div>
                <div>
                    <p>No message yet!</p>
                </div>
                <div class="divButton">
                    <button>Delete</button>
                </div>
                <div class="divButton">
                    <p>No messages to validate yet!</p>
                </div>
            <?php
            }
            ?>
        </section>
    </article>
</main>