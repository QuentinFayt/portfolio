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

            </div>
        </section>
        <section class="tableMessages">
            <?php
            if (isset($messagesAdmin)) {
                foreach ($messagesAdmin as $messageAdmin) {
            ?>
                    <div>
                        <p><?= $messageAdmin["id"] ?></p>
                    </div>
                    <div>
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
                    <div class="delete">
                        <form method="post">
                            <input type="hidden" value="<?= $messageAdmin["id"] ?>" name="deleteId" />
                            <button type="submit" class="buttonEdit">Delete</button>
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
                <div class="delete">
                    <button>Delete</button>
                </div>
            <?php
            }
            ?>
        </section>
    </article>
</main>