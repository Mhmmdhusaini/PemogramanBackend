// TODO 3: Import variable fruits
import fruits from "../data/fruits.js";

// TODO 4: Buat Method Index
const index = () => {
    console.log("Method index - Menampilkan semua data buah");
    fruits.forEach((fruit) => console.log(fruit));
}

// TODO 5: Buat Method Store
const store = (newFruit) => {
    console.log("Method store - Menambahkan buah " + newFruit);
    fruits.push(newFruit);
    fruits.forEach((fruit) => console.log(fruit));
}

// TODO 6: Buat Method Update
const update = (index, newFruit) => {
    console.log("Method update - Update data " + index, "menjadi buah " + newFruit);
    fruits[index] = newFruit;
    fruits.forEach((fruit) => console.log(fruit));
}

// TODO 7: Buat Method Destroy
const destroy = (index) => {
    console.log("Method destroy - Menghapus data " + index);
    fruits.splice(index, 1);
    fruits.forEach((fruit) => console.log(fruit));
}

// TODO 8: Export Semua Method
export  {
    index,
    store,
    update,
    destroy,
}