document.addEventListener("DOMContentLoaded", function () {
    // Declare variables
    let isRunning = false;
    let generation = 0;

    // Event Listener for each button
    const explanationBtn = document.getElementById("explain-btn");
    const explanationBox = document.querySelector(".explanation");
    const closeBtn = document.querySelector(".close-btn");

    // Show or hide the explanation box when the button is clicked

    closeBtn.addEventListener("click", function () {
        explanationBox.classList.toggle("active");
    });

    explanationBtn.addEventListener("click", () => {
        explanationBox.classList.toggle("active");
    });

    // Reset everything when the reset button is clicked
    const resetBtn = document.getElementById("reset-btn");
    const cells = document.querySelectorAll("td");
    const patternSelect = document.getElementById("pattern-select");
    const increase1 = document.getElementById("increase-1");
    const increase23 = document.getElementById("increase-23");

    resetBtn.addEventListener("click", () => {
        // Reset everything.
        score = generation;
        window.location.href = "index.php?score=" + score;
        cells.forEach((cell) => {
            cell.classList.remove("alive");
        });
        startBtn.textContent = "Start";
        isRunning = false;
        if (typeof gameInterval !== "undefined") {
            clearInterval(gameInterval);
        }
        generation = 0;
        generationInfo.textContent = `Generation: ${generation}`;
        patternSelect.selectedIndex = 0;
        patternSelect.disabled = false;
        increase1.disabled = false;
        increase23.disabled = false;
    });
    // Start, Stop button
    const startBtn = document.querySelector("#start-btn");
    const generationInfo = document.querySelector(".info");

    document.getElementById("home").addEventListener("click", function () {
        window.location.href = "intro.html";
    });

    startBtn.addEventListener("click", function () {
        if (!isRunning) {
            startBtn.textContent = "Stop";
            isRunning = true;
            gameInterval = setInterval(gameLogic, 500);
            patternSelect.disabled = true;
            increase1.disabled = true;
            increase23.disabled = true;
        } else {
            startBtn.textContent = "Start";
            isRunning = false;
            clearInterval(gameInterval);
            patternSelect.disabled = false;
            increase1.disabled = false;
            increase23.disabled = false;
        }
    });

    //Increment 1 or 23 generation
    increase1.addEventListener("click", () => {
        gameLogic();
    });

    increase23.addEventListener("click", () => {
        for (k = 0; k < 23; k++) {
            gameLogic();
        }
    });

    // Make toggle alive, dead when user click
    const allCell = document.querySelectorAll(".cell");
    allCell.forEach((smallCell) => {
        smallCell.addEventListener("click", () => {
            smallCell.classList.toggle("alive");
        });
    });

    // To make all necessary cells of the selected pattern alive
    function init(ids) {
        const elements = ids.map((id) => document.getElementById(id));

        elements.forEach((element) => {
            element.classList.add("alive");
        });
    }

    // Pattern selection
    patternSelect.addEventListener("change", function () {
        const selectedIndex = patternSelect.selectedIndex;
        const selectedOption = patternSelect.options[selectedIndex];
        const selectedValue = selectedOption.value;
        cells.forEach((cell) => {
            cell.classList.remove("alive");
        });
        if (selectedValue === "Beehive") {
            init(["1010", "1011", "1210", "1211", "1109", "1112"]);
        } else if (selectedValue === "Blinker") {
            init(["1010", "1011", "1009"]);
        } else if (selectedValue === "Block") {
            init(["1010", "1011", "1110", "1111"]);
        } else if (selectedValue === "Boat") {
            init(["0910", "0911", "1010", "1012", "1111"]);
        } else if (selectedValue === "Loaf") {
            init(["0710", "0711", "0809", "0812", "0910", "0912", "1011"]);
        } else if (selectedValue === "Beacon") {
            init(["0909", "0910", "1009", "1010", "1111", "1112", "1211", "1212"]);
        } else if (selectedValue === "Toad") {
            init(["1010", "1011", "1012", "1109", "1110", "1111"]);
        } else if (selectedValue === "Pulsar") {
            init([
                "0506",
                "0507",
                "0513",
                "0514",
                "0607",
                "0608",
                "0612",
                "0613",
                "0704",
                "0707",
                "0709",
                "0711",
                "0713",
                "0716",
                "0804",
                "0805",
                "0806",
                "0808",
                "0809",
                "0811",
                "0812",
                "0814",
                "0815",
                "0816",
                "0905",
                "0907",
                "0909",
                "0911",
                "0913",
                "0915",
                "1006",
                "1007",
                "1008",
                "1012",
                "1013",
                "1014",
                "1206",
                "1207",
                "1208",
                "1212",
                "1213",
                "1214",
                "1305",
                "1307",
                "1309",
                "1311",
                "1313",
                "1315",
                "1404",
                "1405",
                "1406",
                "1408",
                "1409",
                "1411",
                "1412",
                "1414",
                "1415",
                "1416",
                "1504",
                "1507",
                "1509",
                "1511",
                "1513",
                "1516",
                "1607",
                "1608",
                "1612",
                "1613",
                "1706",
                "1707",
                "1713",
                "1714",
            ]);
        } else if (selectedValue === "Glider") {
            init(["0203", "0304", "0305", "0403", "0404"]);
        } else if (selectedValue === "LightweightSpaceship") {
            init([
                "0405",
                "0408",
                "0509",
                "0605",
                "0609",
                "0706",
                "0707",
                "0708",
                "0709",
            ]);
        } else if (selectedValue === "GosperGliderGun") {
        }
    });

    let score = 0;
    // Main game Logic start here
    function gameLogic() {
        const aliveElements = document.querySelectorAll('.alive');
        if (aliveElements.length === 0 ) {
            console.log('No alive cells found. Stopping game.');
            score = generation;
            window.location.href = "index.php?score=" + score;
            return;
        }
        generation++;
        generationInfo.textContent = `Generation: ${generation}`;
        // Get all elements with the .alive class
        const allElements = document.querySelectorAll("td");
        let deadInNextGeneration = [];
        let rebornInNextGeneration = [];

        // Iterate through all the cells. Then check if dead, put in dead array. else if reborn, put in reborn array.
        allElements.forEach((element) => {
            checkIfAliveInNextGeneration(
                element.id,
                deadInNextGeneration,
                rebornInNextGeneration
            );
        });
        let toggleId;
        for (i = 0; i < deadInNextGeneration.length; i++) {
            toggleId = document.getElementById(deadInNextGeneration[i]);
            toggleId.classList.remove("alive");
        }

        for (j = 0; j < rebornInNextGeneration.length; j++) {
            toggleId = document.getElementById(rebornInNextGeneration[j]);
            toggleId.classList.add("alive");
        }

        let lazy = [];
        allElements.forEach((element) => {
            if (element.classList.contains("alive")) {
                lazy.push(element.id);
            }
        });

        console.log(lazy);
    }

    // Check 8 cells around it. and determine if it is alive in next generation
    function checkIfAliveInNextGeneration(
        id,
        deadInNextGeneration,
        rebornInNextGeneration
    ) {
        const ele = document.getElementById(id);
        let countNeighbourAlive = 0;
        //take first 2 number as row, last 2 number as col and number 10 is represent decimal
        const row = parseInt(id.slice(0, 2), 10);
        const col = parseInt(id.slice(2, 4), 10);

        const neighborCoordinates = [
            [row - 1, col - 1],
            [row - 1, col],
            [row - 1, col + 1],
            [row, col - 1],
            [row, col + 1],
            [row + 1, col - 1],
            [row + 1, col],
            [row + 1, col + 1],
        ];

        neighborCoordinates.forEach(([r, c]) => {
            if (r > 0 && r <= 20 && c > 0 && c <= 20) {
                // Add 0 as nescessary. For ex, 1 will be 01.
                const neighborId = `${r.toString().padStart(2, "0")}${c
                    .toString()
                    .padStart(2, "0")}`;
                const neighborElement = document.getElementById(neighborId);

                if (neighborElement && neighborElement.classList.contains("alive")) {
                    countNeighbourAlive++;
                }
            }
        });

        if (
            countNeighbourAlive !== 2 &&
            countNeighbourAlive !== 3 &&
            ele.classList.contains("alive")
        ) {
            deadInNextGeneration.push(id);
        } else if (countNeighbourAlive === 3 && !ele.classList.contains("alive")) {
            rebornInNextGeneration.push(id);
        }
    }
});