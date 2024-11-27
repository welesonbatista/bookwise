<?php
require 'dados.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Book Wise</title>
</head>

<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4 ">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg space-y-6">

        <form class="w-full flex space-x-2 mt-6">
            <input
                type="text"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 "
                placeholder="Pesquisar.."
                name="pesquisar" />

            <button type="submit">
                <i class="ph ph-magnifying-glass"></i>
            </button>
        </form>

        <!-- lista de livros -->
        <section class="grid gap-3 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <!-- livro -->
            <?php foreach ($livros as $livro): ?>
                <div class="p-2 rounded border-stone-800 bg-stone-900 border-2">
                    <div class="flex">
                        <div class="w-1/3">imagem</div>
                        <div class="space-y-1">
                            <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                            <div class="text-xs italic"><?= $livro['autor'] ?></div>
                            <div class="text-xs italic">(3 valizações)</div>
                        </div>
                    </div>

                    <div class="text-sm mt-2">
                        <?= $livro['descricao'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <div>lista final</div>

    </main>

</body>

</html>