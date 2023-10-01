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
            <h1>упражнение: conjugation</h1>
            <h3 id='whatis'>
                Instructions
                <a class="headerlink" href="#whatis" title="Permalink to this heading">"</a>
            </h3>
            <p>
                Write the conjugated form of the verb.
            </p>

        <?php
            for ($i = 0; $i < 5; $i++) {
                // get a random verb and pronoun
                $verb = array_rand($russian_verbs);
                $pronoun = $pronouns[array_rand($pronouns)];
        ?>
            <div>
                <label for=""><?=$i + 1?>: <?=$pronoun?> (<?=$verb?>)</label>
                <br>
                <input id="<?=$pronoun?>-<?=$verb?>">
                <button onclick="validate('<?=$pronoun?>-<?=$verb?>', '<?=$russian_verbs[$verb][$pronoun]?>')">
                    check
                </button>
            </div>
        <?php
            }
        ?>
        <script>
            function validate(input_id, answer) {
                const input = document.getElementById(input_id);
                if (input.value.trim() == answer) {
                    input.style.color = 'green';
                    return;
                }
                input.style.color = 'red';
            }
        </script>

    </main>
</body>
</html>
