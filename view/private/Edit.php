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
                $messages = array_reverse($messages);
                foreach ($messages as $message) {
            ?>
                    <div>
                        <p><?= $message["id"] ?></p>
                    </div>
                    <div>
                        <p><?= $message["userGuestB"] ?></p>
                    </div>
                    <div>
                        <p><?= $message["textGuestB"] ?></p>
                    </div>
                    <div>
                        <button>Delete</button>
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
                <div>
                    <button>Delete</button>
                </div>
            <?php
            }
            ?>
        </section>
    </article>
</main>