<?php
include 'includes/config.php';
include_once 'includes/header.inc.php';
$result = $db->query("SELECT id, title FROM pages");
?>

<div class="font-['MedievalSharp'] flex flex-col justify-center items-center sm:w-full md:w-[60%]">
    <div class="bg-slate-950 p-10 m-10 rounded text-8xl">
        <h1 class="text-center">A Wiki For The Nerds</h1>
    </div>
    <p class="text-2xl text-center">Hello, time travelers! So, you are here to embark on a journey through time. Experience the marvels of the past, uncover the mysteries of the future, and see history unfold before your very eyes. Choose your timeline and start your adventure!</p>
</div>
<?php
include_once 'includes/footer.php';
?>
</body>

</html>