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
            if (isset($messages)) {
                foreach ($messages as $message) {
            ?>
                    <div>
                        <p><?= $message["id"] ?></p>
                    </div>
                    <div>
                        <p class="editable"><?= $message["userGuestB"] ?></p>
                    </div>
                    <div>
                        <p class="editable"><?= $message["textGuestB"] ?></p>
                        <form method="post">
                            <textarea class="test"><?= $message["textGuestB"] ?></textarea>
                            <button type="submit">Update</button>
                        </form>
                    </div>
                    <div class="delete">
                        <form method="post">
                            <input type="hidden" value="<?= $message["id"] ?>" name="deleteId" />
                            <button type="submit">Delete</button>
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