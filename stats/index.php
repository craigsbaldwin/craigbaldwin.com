<?php
  $page = 'stats';
  $seo_title = 'Stats - Craig Baldwin';
  $title = 'Statistics';
  $description = 'I\'m a numbers person; I like to keep track of all the distances I\'ve travelled and mountains I\'ve climbed.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../assets/includes/head.php' ?>
    <link href="../assets/stats.css?v=1310" rel="stylesheet" />
    <script src="../assets/progress-bar.js?v=1310" async></script>
  </head>

  <body>
    <div class="container">
      <?php include '../assets/includes/header.php' ?>

      <div class="content stats">
        <?php include '../assets/includes/card.php' ?>

        <h2>Strava</h2>

        <p>You can find all my activities on my <a href="https://www.strava.com/athletes/craigbaldwin">Strava account</a>.</p>

        <h2 id="mountains">Mountains</h2>

        <p>I hope to climb all of the 214 Lake District fells described by <a href="https://www.wainwright.org.uk/about-aw/">Wainwright</a> one day. I keep track of my progress here, along with any other mountains I've climbed.</p>

        <progress-bar>
          <div class="progress-bar">
            <div class="progress-bar__bar">
              <div
                class="progress-bar__progress"
                js-progress-bar="bar"
              ></div>
            </div>

            <p
              class="progress-bar__text"
              js-progress-bar="text"
            >100 / 214</p>
          </div>

          <details>
            <summary><h3>Wainwrights (ordered by date climbed)</h3></summary>

            <ol
              class="stats__year-list"
              js-progress-bar="year-list"
            ></ol>
          </details>

          <details>
            <summary><h3>Wainwrights (ordered by height)</h3></summary>

            <ol
              class="stats__list"
              js-progress-bar="list"
            >
              <li year="2014">Scafell Pike</li>
              <li>Scafell</li>
              <li year="2013">Helvellyn</li>
              <li year="2012">Skiddaw</li>
              <li>Great End</li>
              <li year="2022">Bowfell</li>
              <li>Great Gable</li>
              <li>Pillar</li>
              <li year="2014">Nethermost Pike</li>
              <li year="2017">Catstycam</li>
              <li>Esk Pike</li>
              <li year="2014">Raise</li>
              <li year="2014">Fairfield</li>
              <li year="2016">Blencathra</li>
              <li year="2014">Skiddaw Little Man</li>
              <li year="2014">White Side</li>
              <li year="2022">Crinkle Crags</li>
              <li year="2014">Dollywaggon Pike</li>
              <li year="2014">Great Dodd</li>
              <li year="2019">Grasmoor</li>
              <li year="2014">Stybarrow Dodd</li>
              <li>Scoat Fell</li>
              <li year="2017">St Sunday Crag</li>
              <li year="2019">Eel Crag</li>
              <li year="2017">High Street</li>
              <li>Red Pike (Wasdale)</li>
              <li year="2015">Hart Crag</li>
              <li>Steeple</li>
              <li>Lingmell</li>
              <li year="2019">High Stile</li>
              <li year="2016">Coniston Old Man</li>
              <li>High Raise (High Street)</li>
              <li>Kirk Fell</li>
              <li year="2016">Swirl How</li>
              <li>Green Gable</li>
              <li>Haycock</li>
              <li year="2016">Brim Fell</li>
              <li year="2015">Dove Crag</li>
              <li>Rampsgill Head</li>
              <li year="2019">Grisedale Pike</li>
              <li year="2014">Watson's Dodd</li>
              <li year="2016">Great Carrs</li>
              <li>Allen Crags</li>
              <li>Glaramara</li>
              <li year="2017">Thornthwaite Crag</li>
              <li>Kidsty Pike</li>
              <li year="2016">Dow Crag</li>
              <li>Harter Fell (Mardale)</li>
              <li year="2015">Red Screes</li>
              <li year="2016">Grey Friar</li>
              <li year="2019">Sail</li>
              <li year="2019">Wandope</li>
              <li year="2019">Hopegill Head</li>
              <li year="2014">Great Rigg</li>
              <li year="2017">Caudale Moor</li>
              <li year="2016">Wetherlam</li>
              <li year="2015">High Raise (Langdale)</li>
              <li>Slight Side</li>
              <li year="2017">Mardale Ill Bell</li>
              <li year="2017">Ill Bell</li>
              <li year="2017">Hart Side</li>
              <li year="2019">Red Pike (Buttermere)</li>
              <li year="2020">Dale Head</li>
              <li year="2014">Carl Side</li>
              <li year="2019">High Crag</li>
              <li>The Knott</li>
              <li year="2013">Robinson</li>
              <li year="2015">Harrison Stickle</li>
              <li year="2015">Seat Sandal</li>
              <li year="2015">Sergeant Man</li>
              <li year="2021">Long Side</li>
              <li>Kentmere Pike</li>
              <li year="2013">Hindscarth</li>
              <li year="2014">Clough Head</li>
              <li year="2015">Ullscarf</li>
              <li year="2017">Froswick</li>
              <li year="2017">Birkhouse Moor</li>
              <li year="2015">Thunacar Knott</li>
              <li>Brandreth</li>
              <li year="2021">Lonscale Fell</li>
              <li>Branstree</li>
              <li>Knott</li>
              <li year="2015">Pike o'Stickle</li>
              <li year="2019">Whiteside</li>
              <li year="2017">Yoke</li>
              <li year="2022">Pike o'Blisco</li>
              <li>Bowscale Fell</li>
              <li year="2022">Cold Pike</li>
              <li>Caw Fell</li>
              <li year="2017">Gray Crag</li>
              <li year="2015">Pavey Ark</li>
              <li>Rest Dodd</li>
              <li>Grey Knotts</li>
              <li year="2015">Loft Crag</li>
              <li>Seatallan</li>
              <li>Great Calva</li>
              <li>Bannerdale Crags</li>
              <li year="2021">Ullock Pike</li>
              <li year="2017">Sheffield Pike</li>
              <li>Wether Hill</li>
              <li year="2021">Bakestall</li>
              <li year="2020">Scar Crags</li>
              <li>Loadpot Hill</li>
              <li>Tarn Crag (Sleddale)</li>
              <li>Carrock Fell</li>
              <li year="2019">Whiteless Pike</li>
              <li>High Pike (Caldbeck)</li>
              <li year="2015">High Pike (Scandale)</li>
              <li year="2017">Place Fell</li>
              <li>Selside Pike</li>
              <li year="2015">Middle Dodd</li>
              <li year="2013">High Spy</li>
              <li>Harter Fell (Eskdale)</li>
              <li>Great Sca Fell</li>
              <li>Fleetwith Pike</li>
              <li>Base Brown</li>
              <li>Rossett Pike</li>
              <li>Grey Crag</li>
              <li year="2020">Causey Pike</li>
              <li year="2017">Little Hart Crag</li>
              <li>Mungrisdale Common</li>
              <li year="2019">Starling Dodd</li>
              <li>Yewbarrow</li>
              <li year="2017">Birks</li>
              <li year="2017">Hartsop Dodd</li>
              <li>Great Borne</li>
              <li year="2014">Heron Pike</li>
              <li>High Seat</li>
              <li>Illgill Head</li>
              <li>Seathwaite Fell</li>
              <li>Haystacks</li>
              <li year="2016">Bleaberry Fell</li>
              <li>Shipman Knotts</li>
              <li>Brae Fell</li>
              <li>Middle Fell</li>
              <li year="2020">Ard Crags</li>
              <li year="2013">Maiden Moor</li>
              <li>The Nab</li>
              <li>Blake Fell</li>
              <li year="2015">Sergeant's Crag</li>
              <li year="2017">Hartsop Above How</li>
              <li year="2014">Outerside</li>
              <li>Angletarn Pikes</li>
              <li>Brock Crags</li>
              <li year="2020">Knott Rigg</li>
              <li>Lord's Seat</li>
              <li year="2014">Steel Fell</li>
              <li>Rosthwaite Fell</li>
              <li>Hard Knott</li>
              <li>Meal Fell</li>
              <li year="2015">Tarn Crag (Easedale)</li>
              <li year="2014">Blea Rigg</li>
              <li>Lank Rigg</li>
              <li year="2010">Calf Crag</li>
              <li year="2021">Great Mell Fell</li>
              <li>Whin Rigg</li>
              <li>Arthur's Pike</li>
              <li>Gavel Fell</li>
              <li>Great Cockup</li>
              <li>Bonscale Pike</li>
              <li>Crag Fell</li>
              <li>Souther Fell</li>
              <li year="2017">High Hartsop Dodd</li>
              <li>Whinlatter</li>
              <li>High Tove</li>
              <li year="2017">Sallows</li>
              <li year="2019">Mellbreak</li>
              <li>Beda Fell</li>
              <li>Broom Fell</li>
              <li>Hen Comb</li>
              <li year="2015">Low Pike</li>
              <li year="2021">Little Mell Fell</li>
              <li year="2014">Stone Arthur</li>
              <li year="2015">Eagle Crag</li>
              <li year="2012">Dodd</li>
              <li>Green Crag</li>
              <li>Grike</li>
              <li year="2015">Wansfell</li>
              <li>Longlands Fell</li>
              <li year="2017">Sour Howes</li>
              <li year="2021">Gowbarrow Fell</li>
              <li>Armboth Fell</li>
              <li>Burnbank Fell</li>
              <li year="2016">Lingmoor Fell</li>
              <li>Barf</li>
              <li year="2021">Raven Crag</li>
              <li>Great Crag</li>
              <li year="2014">Barrow</li>
              <li year="2013">Catbells</li>
              <li>Graystones</li>
              <li>Binsey</li>
              <li year="2017">Glenridding Dodd</li>
              <li year="2014">Nab Scar</li>
              <li year="2017">Arnison Crag</li>
              <li>Steel Knotts</li>
              <li>Buckbarrow</li>
              <li year="2010">Gibson Knott</li>
              <li year="2019">Fellbarrow</li>
              <li>Grange Fell</li>
              <li year="2019">Low Fell</li>
              <li year="2010">Helm Crag</li>
              <li year="2014">Silver How</li>
              <li year="2017">Hallin Fell</li>
              <li year="2012">Walla Crag</li>
              <li>Ling Fell</li>
              <li year="2010">Latrigg</li>
              <li year="2017">Troutbeck Tongue</li>
              <li>Sale Fell</li>
              <li year="2021">High Rigg</li>
              <li year="2019">Rannerdale Knotts</li>
              <li year="2014">Loughrigg Fell</li>
              <li year="2016">Black Fell</li>
              <li year="2016">Holme Fell</li>
              <li year="2010">Castle Crag</li>
            </ol>
          </details>
        </progress-bar>

        <details>
          <summary><h2>Welsh mountains (ordered by date climbed)</h2></summary>

          <ol class="stats__year-list">
            <li year="2024">Blaen yr Henbant</li>
            <li year="2024">Crug Mawr</li>
            <li year="2024">Sugar Loaf</li>
            <li year="2023">Pen Tir</li>
            <li year="2023">Cefn Moel</li>
            <li year="2023">Pen Allt-mawr</li>
            <li year="2023">Pen Twyn Glas</li>
            <li year="2023">Waun Fach</li>
            <li year="2023">Pen y Gadair Fawr</li>
            <li year="2023">Pen Twyn Mawr</li>
            <li year="2023">Table Mountain</li>
            <li year="2016">Cribyn</li>
            <li year="2016">Pen y Fan</li>
            <li year="2016">Corn Du</li>
            <li year="2016">Fan y Big</li>
            <li year="2016">Mynydd Ceiswyn</li>
            <li year="2016">Craig Cau</li>
            <li year="2016">Cadair Idris</li>
          </ol>
        </details>

        <h2 id="walking-diary">Walking Diary</h2>

        <h3 year="2024">May 2024</h3>
        <p>
          <strong>Near Llanbedr for 3 nights. Climbed 4 mountains (3 new).</strong><br>
          Blaen yr Henbant, Crug Mawr, Sugar Loaf, & Table Mountain.
        </p>

        <h3 year="2023">August 2023</h3>
        <p>
          <strong>Keswick for 6 nights. Climbed 1 mountains (0 new).</strong><br>
          Latrigg, & illness meant I didn't climb any other mountains.
        </p>

        <h3 year="2023">June 2023</h3>
        <p>
          <strong>Crickhowell for 6 nights. Climbed 8 mountains (8 new).</strong><br>
          Pen Tir, Cefn Moel, Pen Allt-mawr, Pen Twyn Glas, Waun Fach, Pen y Gadair Fawr, Pen Twyn Mawr, & Table Mountain.
        </p>

        <h3 year="2022">November 2022</h3>
        <p>
          <strong>Grasmere for 6 nights. Climbed 6 mountains (4 new).</strong><br>
          Silver Howe, Blea Rigg, Pike of Blisco, Cold Pike, Crinkle Crags, & Bowfell.
        </p>

        <h3 year="2021">October 2021</h3>
        <p>
          <strong>Keswick for 7 nights. Climbed 12 mountains (9 new).</strong><br>
          High Rigg, Raven Crag, Gowbarrow Fell, Little Mell Fell, Great Mell Fell, Ullock Pike, Long Side, Carl Side, Skiddaw, Bakestall, Skiddaw Little Man, & Lonscale Fell.
        </p>

        <h3 year="2020">August 2020</h3>
        <p>
          <strong>Keswick for 6 nights. Climbed 11 mountains (5 new).</strong><br>
          Latrigg, Dale Head, Hindscarth, Robinson, Knott Rigg, Ard Crags, Walla Crag, Eel Crag, Sail, Scar Crags, & Causey Pike.
        </p>

        <h3 year="2019">August 2019</h3>
        <p>
          <strong>Keswick for 7 nights. Climbed 0 mountains (0 new).</strong><br>
          Injuries meant I didn't climb any mountains.
        </p>

        <h3 year="2019">February 2019</h3>
        <p>
          <strong>Buttermere for 7 nights. Climbed 16 mountains (16 new).</strong><br>
          Whiteside, Hopegill Head, Grisedale Pike, Grasmoor, Eel Crag, Sail, Wandope, Whiteless Pike, Rannerdale Knotts, Mellbreak, High Crag, High Stile, Red Pike (Buttermere), Starling Dodd, Fellbarrow, & Low Fell.
        </p>

        <h3 year="2018">August 2018</h3>
        <p>
          <strong>Keswick for 7 nights. Climbed 2 mountains (0 new).</strong><br>
          Latrigg, & Dodd.
        </p>

        <h3 year="2017">November 2017</h3>
        <p>
          <strong>Glenridding for 6 nights. Climbed 17 mountains (13 new).</strong><br>
          St. Sunday Crag, Birks, Arnison Crag, Birkhouse Moor, Catstycam, Helvellyn, White Side, Raise, Hart Side, Sheffield Pike, Glenridding Dodd, Place Fell, Hallin Fell, Hartsop above How, Hart Crag, Dove Crag, Little Hart Crag, & High Hartsop Dodd.
        </p>

        <h3 year="2017">March 2017</h3>
        <p>
          <strong>Troutbeck for 6 nights. Climbed 12 mountains (12 new).</strong><br>
          Troutbeck Tongue, Sallows, Yoke, Ill Bell, Froswick, Thornthwaite Crag, High Street, Mardale Ill Bell, Gray Crag, Caudale Moor, Hartsop Dodd, & Sour Howes.
        </p>

        <h3 year="2016">November 2016</h3>
        <p>
          <strong>Near Dolgellau for 6 nights. Climbed 3 mountains (3 new).</strong><br>
          Mynydd Ceiswyn, Craig Cau, & Cadair Idris.
        </p>

        <h3 year="2016">August 2016</h3>
        <p>
          <strong>Keswick for 7 nights. Climbed 4 mountains (2 new).</strong><br>
          Walla Crag, Bleaberry Fell, Blencathra, & Latrigg.
        </p>

        <h3 year="2016">June 2016</h3>
        <p>
          <strong>Near Llanfrynach for 3 nights. Climbed 4 mountains (4 new).</strong><br>
          Cribyn, Pen y Fan, Corn Du, & Fan y Big.
        </p>

        <h3 year="2016">March 2016</h3>
        <p>
          <strong>Coniston for 7 nights. Climbed 10 mountains (10 new).</strong><br>
          Holme Fell, Black Fell, Coniston Old Man, Brim Fell, Dow Crag, Wetherlam, Swirl How, Great Carrs, Grey Friar, & Lingmoor Fell.
        </p>

        <h3 year="2015">August 2015</h3>
        <p>
          <strong>Ambleside for 7 nights. Climbed 4 mountains (3 new).</strong><br>
          Loughrigg, Red Screes, Middle Dodd, & Wansfell.
        </p>

        <h3 year="2015">March 2015</h3>
        <p>
          <strong>Grasmere for 7 nights. Climbed 20 mountains (16 new).</strong><br>
          Helm Crag, Gibson Knott, Calf Crag, Tarn Crag, Loft Crag, Pike O’Stickle, Harrison Stickle, Pavey Ark, Thunacar Knott, High Raise, Sergeant Man, Seat Sandal, Fairfield, Hart Crag, Dove Crag, High Pike, Low Pike, Sergeant’s Crag, Eagle Crag, & Ullscarf.
        </p>

        <h3 year="2014">August 2014</h3>
        <p>
          <strong>Keswick for 7 nights. Climbed 8 mountains (5 new).</strong><br>
          Latrigg, Skiddaw Little Man, Skiddaw, Carl Side, Scafell Pike, Barrow, Outerside, & Walla Crag.
        </p>

        <h3 year="2014">April 2014</h3>
        <p>
          <strong>Grasmere for 7 nights. Climbed 21 mountains (17 new).</strong><br>
          Heron Pike, Nab Scar, Loughrigg Fell, Stone Arthur, Great Rigg, Fairfield, Dollywagon Pike, Nethermost Pike, Helvellyn, White Side, Raise, Stybarrow Dodd, Watson’s Dodd, Great Dodd, Clough Head, Steel Fell, Calf Crag, Gibson Knott, Helm Crag, Blea Rigg, & Silver How.
        </p>

        <h3 year="2013">August 2013</h3>
        <p>
          <strong>Keswick for 7 nights. Climbed 7 mountains (6 new).</strong><br>
          Latrigg, Cat Bells, Maiden Moor, High Spy, Helvellyn, Hindscarth, & Robinson.
        </p>

        <h3 year="2012">August 2012</h3>
        <p>
          <strong>Keswick for 7 nights. Climbed 4 mountains (3 new).</strong><br>
          Walla Crag, Dodd, Skiddaw, & Latrigg.
        </p>

        <h3 year="2011">August 2011</h3>
        <p>
          <strong>Keswick for 7 nights. Climbed 1 mountains (0 new).</strong><br>
          Latrigg. Either walked in valleys or just missed the summits.
        </p>

        <h3 year="2010">August 2010</h3>
        <p>
          <strong>Keswick for 10 nights. Climbed 5 mountains (5 new).</strong><br>
          Latrigg, Helm Crag, Gibson Knott, Calf Crag, & Castle Crag.
        </p>
      </div>
    </div>

    <?php include '../assets/includes/footer.php' ?>
  </body>
</html>
