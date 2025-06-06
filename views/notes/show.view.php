<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <p> <?= htmlspecialchars($note['body']) ?></p>


        <footer class="mt-6 flex gap-x-4">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Edit
            </a>
            <a
                href="/note/delete?id=<?= $note['id'] ?>"
                class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                onclick="return confirm('Are you sure you want to delete this note?');">
                Delete
            </a>
        </footer>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>