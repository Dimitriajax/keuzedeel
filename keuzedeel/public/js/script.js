let checked = document.querySelectorAll('input[type="checkbox"]:checked');
let boxes = document.querySelectorAll('input[type="checkbox"]');
let count = checked.length;

let array = [];
let squares = [];

show();

async function fetchData(file) {
    const res = await fetch(file);
    const fetched = await res.json();
    return fetched;
}

function show() {
    const retrieved = fetchData('data.json');
    retrieved.then((data) => {
        boxes.forEach(box => {
            box.addEventListener('click', () => {
                if (count == 6 && box.checked) {
                    change(box, count);
                    return;
                }

                count = change(box, count);
                count == 0 && (array = []);

                updateArray(array, count);
                showSquares(squares, array, data, box);
            });
        });
    });
}

for (let i = 1; i <= 6; i++) {
    const box = document.getElementById(`box-${i}`);
    squares.push(box);
}

function showSquares(squares, array, data, box) {
    squares.forEach(square => {
        appear(square, array);
    });

    // if (array.length >= 1) {
    //     data.forEach(d => {
    //         if (box.id == d.category) {
    //             squares[count - 1].innerText = d.category;
    //         }
    //     });
    // }
}

function appear(box, array) {
    let i = box.id.split('box-')[1];

    if (array.includes(parseInt(i))) {
        box.classList.remove('hidden');
    } else {
        box.classList.add('hidden');
    }
}

function change(variable, count) {
    if (variable.checked && count == 6) {
        variable.checked = false;
        return count;
    }

    variable.checked ? count++ : count--;
    return count;
}

function updateArray(array, count) {
    if (!array.includes(count)) {
        array.push(count);
    }

    for (let i = 0; i < array.length; i++) {
        if (array[i] === count) {
            console.log(array[i])
            array.splice(count, 1);
        }
    }
    return array
}

