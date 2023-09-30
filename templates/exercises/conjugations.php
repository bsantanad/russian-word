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
                Write the conjugated form of the verb then hit next.
            </p>

        <div>
            <label for=""><?=$pronoun?> (<?=$verb?>)</label>
            <br>
            <input id="word">
            <button onclick="validate('word', '<?=$russian_verbs[$verb][$pronoun]?>')">
                check
            </button>
        </div>
        <script>
            function validate(input_id, answer) {
                if (document.getElementById(input_id).value == answer) {
                    alert('correct');
                    return;
                }
                alert('not correct');
            }
        </script>

        <?php
            //echo "Он $verb: " . $russian_verbs[$verb][$pronoun];
        ?>
    </main>
</body>
</html>
