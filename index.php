<?php
    session_start();
    if (!isset($_SESSION['name'])){
        header('Location: login.php');
        session_destroy();
        exit();
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script defer src="script.js"></script>
    <title>Project 3</title>
</head>
<body>
    <h1 style="margin: 5px auto; color: #eee; text-align: center">
        Game Of Life!
    </h1>
    <div class="info">
        <?php
            $name = $_SESSION['name'];
            echo '<p>Welcome, ' . $name . '!</p>';
        ?>
        <p id="generation-info">Generation: 0</p>
        <p>Score: <span id="score">0</span></p>
        <p>Timer: <span id="timer">1:00</span></p>
    </div>
    <script>
        let targetName = "<?php echo $name; ?>";
    </script>
    <table>
        <tbody>
            <tr>
                <td id="0101" class="cell"></td>
                <td id="0102" class="cell"></td>
                <td id="0103" class="cell"></td>
                <td id="0104" class="cell"></td>
                <td id="0105" class="cell"></td>
                <td id="0106" class="cell"></td>
                <td id="0107" class="cell"></td>
                <td id="0108" class="cell"></td>
                <td id="0109" class="cell"></td>
                <td id="0110" class="cell"></td>
                <td id="0111" class="cell"></td>
                <td id="0112" class="cell"></td>
                <td id="0113" class="cell"></td>
                <td id="0114" class="cell"></td>
                <td id="0115" class="cell"></td>
                <td id="0116" class="cell"></td>
                <td id="0117" class="cell"></td>
                <td id="0118" class="cell"></td>
                <td id="0119" class="cell"></td>
                <td id="0120" class="cell"></td>
            </tr>
            <tr>
                <td id="0201" class="cell"></td>
                <td id="0202" class="cell"></td>
                <td id="0203" class="cell"></td>
                <td id="0204" class="cell"></td>
                <td id="0205" class="cell"></td>
                <td id="0206" class="cell"></td>
                <td id="0207" class="cell"></td>
                <td id="0208" class="cell"></td>
                <td id="0209" class="cell"></td>
                <td id="0210" class="cell"></td>
                <td id="0211" class="cell"></td>
                <td id="0212" class="cell"></td>
                <td id="0213" class="cell"></td>
                <td id="0214" class="cell"></td>
                <td id="0215" class="cell"></td>
                <td id="0216" class="cell"></td>
                <td id="0217" class="cell"></td>
                <td id="0218" class="cell"></td>
                <td id="0219" class="cell"></td>
                <td id="0220" class="cell"></td>
            </tr>
            <tr>
                <td id="0301" class="cell"></td>
                <td id="0302" class="cell"></td>
                <td id="0303" class="cell"></td>
                <td id="0304" class="cell"></td>
                <td id="0305" class="cell"></td>
                <td id="0306" class="cell"></td>
                <td id="0307" class="cell"></td>
                <td id="0308" class="cell"></td>
                <td id="0309" class="cell"></td>
                <td id="0310" class="cell"></td>
                <td id="0311" class="cell"></td>
                <td id="0312" class="cell"></td>
                <td id="0313" class="cell"></td>
                <td id="0314" class="cell"></td>
                <td id="0315" class="cell"></td>
                <td id="0316" class="cell"></td>
                <td id="0317" class="cell"></td>
                <td id="0318" class="cell"></td>
                <td id="0319" class="cell"></td>
                <td id="0320" class="cell"></td>
            </tr>
            <tr>
                <td id="0401" class="cell"></td>
                <td id="0402" class="cell"></td>
                <td id="0403" class="cell"></td>
                <td id="0404" class="cell"></td>
                <td id="0405" class="cell"></td>
                <td id="0406" class="cell"></td>
                <td id="0407" class="cell"></td>
                <td id="0408" class="cell"></td>
                <td id="0409" class="cell"></td>
                <td id="0410" class="cell"></td>
                <td id="0411" class="cell"></td>
                <td id="0412" class="cell"></td>
                <td id="0413" class="cell"></td>
                <td id="0414" class="cell"></td>
                <td id="0415" class="cell"></td>
                <td id="0416" class="cell"></td>
                <td id="0417" class="cell"></td>
                <td id="0418" class="cell"></td>
                <td id="0419" class="cell"></td>
                <td id="0420" class="cell"></td>
            </tr>
            <tr>
                <td id="0501" class="cell"></td>
                <td id="0502" class="cell"></td>
                <td id="0503" class="cell"></td>
                <td id="0504" class="cell"></td>
                <td id="0505" class="cell"></td>
                <td id="0506" class="cell"></td>
                <td id="0507" class="cell"></td>
                <td id="0508" class="cell"></td>
                <td id="0509" class="cell"></td>
                <td id="0510" class="cell"></td>
                <td id="0511" class="cell"></td>
                <td id="0512" class="cell"></td>
                <td id="0513" class="cell"></td>
                <td id="0514" class="cell"></td>
                <td id="0515" class="cell"></td>
                <td id="0516" class="cell"></td>
                <td id="0517" class="cell"></td>
                <td id="0518" class="cell"></td>
                <td id="0519" class="cell"></td>
                <td id="0520" class="cell"></td>
            </tr>
            <tr>
                <td id="0601" class="cell"></td>
                <td id="0602" class="cell"></td>
                <td id="0603" class="cell"></td>
                <td id="0604" class="cell"></td>
                <td id="0605" class="cell"></td>
                <td id="0606" class="cell"></td>
                <td id="0607" class="cell"></td>
                <td id="0608" class="cell"></td>
                <td id="0609" class="cell"></td>
                <td id="0610" class="cell"></td>
                <td id="0611" class="cell"></td>
                <td id="0612" class="cell"></td>
                <td id="0613" class="cell"></td>
                <td id="0614" class="cell"></td>
                <td id="0615" class="cell"></td>
                <td id="0616" class="cell"></td>
                <td id="0617" class="cell"></td>
                <td id="0618" class="cell"></td>
                <td id="0619" class="cell"></td>
                <td id="0620" class="cell"></td>
            </tr>
            <tr>
                <td id="0701" class="cell"></td>
                <td id="0702" class="cell"></td>
                <td id="0703" class="cell"></td>
                <td id="0704" class="cell"></td>
                <td id="0705" class="cell"></td>
                <td id="0706" class="cell"></td>
                <td id="0707" class="cell"></td>
                <td id="0708" class="cell"></td>
                <td id="0709" class="cell"></td>
                <td id="0710" class="cell"></td>
                <td id="0711" class="cell"></td>
                <td id="0712" class="cell"></td>
                <td id="0713" class="cell"></td>
                <td id="0714" class="cell"></td>
                <td id="0715" class="cell"></td>
                <td id="0716" class="cell"></td>
                <td id="0717" class="cell"></td>
                <td id="0718" class="cell"></td>
                <td id="0719" class="cell"></td>
                <td id="0720" class="cell"></td>
            </tr>
            <tr>
                <td id="0801" class="cell"></td>
                <td id="0802" class="cell"></td>
                <td id="0803" class="cell"></td>
                <td id="0804" class="cell"></td>
                <td id="0805" class="cell"></td>
                <td id="0806" class="cell"></td>
                <td id="0807" class="cell"></td>
                <td id="0808" class="cell"></td>
                <td id="0809" class="cell"></td>
                <td id="0810" class="cell"></td>
                <td id="0811" class="cell"></td>
                <td id="0812" class="cell"></td>
                <td id="0813" class="cell"></td>
                <td id="0814" class="cell"></td>
                <td id="0815" class="cell"></td>
                <td id="0816" class="cell"></td>
                <td id="0817" class="cell"></td>
                <td id="0818" class="cell"></td>
                <td id="0819" class="cell"></td>
                <td id="0820" class="cell"></td>
            </tr>
            <tr>
                <td id="0901" class="cell"></td>
                <td id="0902" class="cell"></td>
                <td id="0903" class="cell"></td>
                <td id="0904" class="cell"></td>
                <td id="0905" class="cell"></td>
                <td id="0906" class="cell"></td>
                <td id="0907" class="cell"></td>
                <td id="0908" class="cell"></td>
                <td id="0909" class="cell"></td>
                <td id="0910" class="cell"></td>
                <td id="0911" class="cell"></td>
                <td id="0912" class="cell"></td>
                <td id="0913" class="cell"></td>
                <td id="0914" class="cell"></td>
                <td id="0915" class="cell"></td>
                <td id="0916" class="cell"></td>
                <td id="0917" class="cell"></td>
                <td id="0918" class="cell"></td>
                <td id="0919" class="cell"></td>
                <td id="0920" class="cell"></td>
            </tr>
            <tr>
                <td id="1001" class="cell"></td>
                <td id="1002" class="cell"></td>
                <td id="1003" class="cell"></td>
                <td id="1004" class="cell"></td>
                <td id="1005" class="cell"></td>
                <td id="1006" class="cell"></td>
                <td id="1007" class="cell"></td>
                <td id="1008" class="cell"></td>
                <td id="1009" class="cell"></td>
                <td id="1010" class="cell"></td>
                <td id="1011" class="cell"></td>
                <td id="1012" class="cell"></td>
                <td id="1013" class="cell"></td>
                <td id="1014" class="cell"></td>
                <td id="1015" class="cell"></td>
                <td id="1016" class="cell"></td>
                <td id="1017" class="cell"></td>
                <td id="1018" class="cell"></td>
                <td id="1019" class="cell"></td>
                <td id="1020" class="cell"></td>
            </tr>
            <tr>
                <td id="1101" class="cell"></td>
                <td id="1102" class="cell"></td>
                <td id="1103" class="cell"></td>
                <td id="1104" class="cell"></td>
                <td id="1105" class="cell"></td>
                <td id="1106" class="cell"></td>
                <td id="1107" class="cell"></td>
                <td id="1108" class="cell"></td>
                <td id="1109" class="cell"></td>
                <td id="1110" class="cell"></td>
                <td id="1111" class="cell"></td>
                <td id="1112" class="cell"></td>
                <td id="1113" class="cell"></td>
                <td id="1114" class="cell"></td>
                <td id="1115" class="cell"></td>
                <td id="1116" class="cell"></td>
                <td id="1117" class="cell"></td>
                <td id="1118" class="cell"></td>
                <td id="1119" class="cell"></td>
                <td id="1120" class="cell"></td>
            </tr>
            <tr>
                <td id="1201" class="cell"></td>
                <td id="1202" class="cell"></td>
                <td id="1203" class="cell"></td>
                <td id="1204" class="cell"></td>
                <td id="1205" class="cell"></td>
                <td id="1206" class="cell"></td>
                <td id="1207" class="cell"></td>
                <td id="1208" class="cell"></td>
                <td id="1209" class="cell"></td>
                <td id="1210" class="cell"></td>
                <td id="1211" class="cell"></td>
                <td id="1212" class="cell"></td>
                <td id="1213" class="cell"></td>
                <td id="1214" class="cell"></td>
                <td id="1215" class="cell"></td>
                <td id="1216" class="cell"></td>
                <td id="1217" class="cell"></td>
                <td id="1218" class="cell"></td>
                <td id="1219" class="cell"></td>
                <td id="1220" class="cell"></td>
            </tr>
            <tr>
                <td id="1301" class="cell"></td>
                <td id="1302" class="cell"></td>
                <td id="1303" class="cell"></td>
                <td id="1304" class="cell"></td>
                <td id="1305" class="cell"></td>
                <td id="1306" class="cell"></td>
                <td id="1307" class="cell"></td>
                <td id="1308" class="cell"></td>
                <td id="1309" class="cell"></td>
                <td id="1310" class="cell"></td>
                <td id="1311" class="cell"></td>
                <td id="1312" class="cell"></td>
                <td id="1313" class="cell"></td>
                <td id="1314" class="cell"></td>
                <td id="1315" class="cell"></td>
                <td id="1316" class="cell"></td>
                <td id="1317" class="cell"></td>
                <td id="1318" class="cell"></td>
                <td id="1319" class="cell"></td>
                <td id="1320" class="cell"></td>
            </tr>
            <tr>
                <td id="1401" class="cell"></td>
                <td id="1402" class="cell"></td>
                <td id="1403" class="cell"></td>
                <td id="1404" class="cell"></td>
                <td id="1405" class="cell"></td>
                <td id="1406" class="cell"></td>
                <td id="1407" class="cell"></td>
                <td id="1408" class="cell"></td>
                <td id="1409" class="cell"></td>
                <td id="1410" class="cell"></td>
                <td id="1411" class="cell"></td>
                <td id="1412" class="cell"></td>
                <td id="1413" class="cell"></td>
                <td id="1414" class="cell"></td>
                <td id="1415" class="cell"></td>
                <td id="1416" class="cell"></td>
                <td id="1417" class="cell"></td>
                <td id="1418" class="cell"></td>
                <td id="1419" class="cell"></td>
                <td id="1420" class="cell"></td>
            </tr>
            <tr>
                <td id="1501" class="cell"></td>
                <td id="1502" class="cell"></td>
                <td id="1503" class="cell"></td>
                <td id="1504" class="cell"></td>
                <td id="1505" class="cell"></td>
                <td id="1506" class="cell"></td>
                <td id="1507" class="cell"></td>
                <td id="1508" class="cell"></td>
                <td id="1509" class="cell"></td>
                <td id="1510" class="cell"></td>
                <td id="1511" class="cell"></td>
                <td id="1512" class="cell"></td>
                <td id="1513" class="cell"></td>
                <td id="1514" class="cell"></td>
                <td id="1515" class="cell"></td>
                <td id="1516" class="cell"></td>
                <td id="1517" class="cell"></td>
                <td id="1518" class="cell"></td>
                <td id="1519" class="cell"></td>
                <td id="1520" class="cell"></td>
            </tr>
            <tr>
                <td id="1601" class="cell"></td>
                <td id="1602" class="cell"></td>
                <td id="1603" class="cell"></td>
                <td id="1604" class="cell"></td>
                <td id="1605" class="cell"></td>
                <td id="1606" class="cell"></td>
                <td id="1607" class="cell"></td>
                <td id="1608" class="cell"></td>
                <td id="1609" class="cell"></td>
                <td id="1610" class="cell"></td>
                <td id="1611" class="cell"></td>
                <td id="1612" class="cell"></td>
                <td id="1613" class="cell"></td>
                <td id="1614" class="cell"></td>
                <td id="1615" class="cell"></td>
                <td id="1616" class="cell"></td>
                <td id="1617" class="cell"></td>
                <td id="1618" class="cell"></td>
                <td id="1619" class="cell"></td>
                <td id="1620" class="cell"></td>
            </tr>
            <tr>
                <td id="1701" class="cell"></td>
                <td id="1702" class="cell"></td>
                <td id="1703" class="cell"></td>
                <td id="1704" class="cell"></td>
                <td id="1705" class="cell"></td>
                <td id="1706" class="cell"></td>
                <td id="1707" class="cell"></td>
                <td id="1708" class="cell"></td>
                <td id="1709" class="cell"></td>
                <td id="1710" class="cell"></td>
                <td id="1711" class="cell"></td>
                <td id="1712" class="cell"></td>
                <td id="1713" class="cell"></td>
                <td id="1714" class="cell"></td>
                <td id="1715" class="cell"></td>
                <td id="1716" class="cell"></td>
                <td id="1717" class="cell"></td>
                <td id="1718" class="cell"></td>
                <td id="1719" class="cell"></td>
                <td id="1720" class="cell"></td>
            </tr>
            <tr>
                <td id="1801" class="cell"></td>
                <td id="1802" class="cell"></td>
                <td id="1803" class="cell"></td>
                <td id="1804" class="cell"></td>
                <td id="1805" class="cell"></td>
                <td id="1806" class="cell"></td>
                <td id="1807" class="cell"></td>
                <td id="1808" class="cell"></td>
                <td id="1809" class="cell"></td>
                <td id="1810" class="cell"></td>
                <td id="1811" class="cell"></td>
                <td id="1812" class="cell"></td>
                <td id="1813" class="cell"></td>
                <td id="1814" class="cell"></td>
                <td id="1815" class="cell"></td>
                <td id="1816" class="cell"></td>
                <td id="1817" class="cell"></td>
                <td id="1818" class="cell"></td>
                <td id="1819" class="cell"></td>
                <td id="1820" class="cell"></td>
            </tr>
            <tr>
                <td id="1901" class="cell"></td>
                <td id="1902" class="cell"></td>
                <td id="1903" class="cell"></td>
                <td id="1904" class="cell"></td>
                <td id="1905" class="cell"></td>
                <td id="1906" class="cell"></td>
                <td id="1907" class="cell"></td>
                <td id="1908" class="cell"></td>
                <td id="1909" class="cell"></td>
                <td id="1910" class="cell"></td>
                <td id="1911" class="cell"></td>
                <td id="1912" class="cell"></td>
                <td id="1913" class="cell"></td>
                <td id="1914" class="cell"></td>
                <td id="1915" class="cell"></td>
                <td id="1916" class="cell"></td>
                <td id="1917" class="cell"></td>
                <td id="1918" class="cell"></td>
                <td id="1919" class="cell"></td>
                <td id="1920" class="cell"></td>
            </tr>
            <tr>
                <td id="2001" class="cell"></td>
                <td id="2002" class="cell"></td>
                <td id="2003" class="cell"></td>
                <td id="2004" class="cell"></td>
                <td id="2005" class="cell"></td>
                <td id="2006" class="cell"></td>
                <td id="2007" class="cell"></td>
                <td id="2008" class="cell"></td>
                <td id="2009" class="cell"></td>
                <td id="2010" class="cell"></td>
                <td id="2011" class="cell"></td>
                <td id="2012" class="cell"></td>
                <td id="2013" class="cell"></td>
                <td id="2014" class="cell"></td>
                <td id="2015" class="cell"></td>
                <td id="2016" class="cell"></td>
                <td id="2017" class="cell"></td>
                <td id="2018" class="cell"></td>
                <td id="2019" class="cell"></td>
                <td id="2020" class="cell"></td>
            </tr>
        </tbody>
    </table>
    <div class="btn-container">
        <button id="explain-btn">Explanation</button>
        <button id="start-btn">Start</button>
        <button id="reset-btn">Reset</button>
        <button id="home">Homepage</button>
    </div>
    <div class="btn-container btn-increment">
        <button id="increase-1">Increment 1 generation</button>
        <button id="increase-23">Increment 23 generations</button>
    </div>
    <div class="btn-container">
        <select id="pattern-select">
            <option value="" disabled selected>Select a pattern</option>
            <option value="Beehive">The Beehive</option>
            <option value="Blinker">The Blinker</option>
            <option value="Beacon">The Beacon</option>
            <option value="Toad">The Toad</option>
            <option value="Pulsar">The Pulsar</option>
            <option value="Glider">Glider</option>
            <option value="LightweightSpaceship">Lightweight Spaceship</option>
            <option value="GosperGliderGun">Gosper Glider Gun</option>
            <option value="Block">The Block</option>
            <option value="Boat">The Boat</option>
            <option value="Loaf">The Loaf</option>
            <option value="Beehive">The Beehive</option>
        </select>
    </div>
    <div class="explanation">
        <button class="close-btn">&times;</button>
        <h2>
            Objective: The game of life is a grid of cells where each cell is in the
            state of being alive or not. The next generation of the game depends on
            the current generation and the following rules:
        </h2>
        <ul>
            <li>
                Any live cell with fewer than two live neighbors dies, which is caused
                by under population.
            </li>
            <li>
                Any live cell with more than three live neighbors dies, as if by
                overcrowding.
            </li>
            <li>
                Any live cell with two or three live neighbors lives on to the next
                generation.
            </li>
            <li>
                Any dead cell with exactly three live neighbors becomes a live cell.
            </li>
            <li>
                Score: You will accumulate points based on the number of living cells in each generation over a 1-minute interval (which equates to 120 generations). The more cells that remain alive in each generation, the higher your overall score will be.
            </li>
        </ul>
        <p>
            Therefore by repeating the cycle over and over, these simple rules
            create interesting, often unpredictable patterns.
        </p>
        <p>
            For more information, see
            <a href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life"
               target="_blank"
               rel="noopener">Wikipedia</a>.
        </p>
    </div>
</body>
</html>