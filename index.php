<?php
require_once __DIR__ . "/app/api.php"; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo TITLE ?></title>
    <meta name="description"
          content="With this application it is possible to list by countries, sites, categories and by keywords.">
    <meta name="author" content="JMultimidia.com.br">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row margin-top-40">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <ul class="icon-nav">
                        <li class='dropdown'>
							<?php echo "$bandeira"; ?>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php?lang=br"><img src="assets/images/flags/br.gif"
                                                                     alt="Change language to English"><span>Português</span></a>
                                </li>
                                <li>
                                    <a href="index.php?lang=en"><img src="assets/images/flags/en.gif"
                                                                     alt="Mudar idioma para o Português"><span>English</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <h3>
				<?php echo TITLE ?>
            </h3>
            <div class="row">
				<?php foreach ( $datanews->articles as $news ) :
					if ( ! empty( $news->urlToImage ) ) {
						echo "<div class=\"col-md-3\">
					<div class=\"card\">
						<img class=\"card-img-top\" alt=\"$news->title\" src=\"$news->urlToImage\">
						<div class=\"card-block\">
							<h5 class=\"card-title\">
								" . dateExtract( $news->publishedAt ) . "
							</h5>
							<p class=\"card-text\">
								$news->title
							</p>
							<p>
								<a class=\"btn btn-danger btn-sm\" href=\"$news->url\">" . READ_MORE . "</a>
							</p>
						</div>
					</div>
				</div>";
					}
				endforeach; ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
</body>
</html>