<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>русское слово</title>
    <link rel="stylesheet" href="/static/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
      <h1>русское слово</h1>
      <nav>
        <ul>
          <li><a href="/">дом</a></li>
          <li><a href="/exercises">упражнений</a></li>
        </ul>
      </nav>
    </header>
    <main>
            <h1>упражнение: dialogues</h1>
            <h3 id='whatis'>
                Instructions
                <a class="headerlink" href="#whatis" title="Permalink to this heading">"</a>
            </h3>
            <p>
                Read and understanding the dialogue below.
            </p>

        <?php
            // get a random verb and pronoun
            $key= array_rand($dialogues);
        ?>
            <h3>диалог номер <?=$key?></h3>
        <?php
            foreach($dialogues[$key] as $line){
        ?>
        <ul>
            <li><?=$line?></li>
        </ul>
        <?php
            }
        ?>
    </main>
</body>
</html>
