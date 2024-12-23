// TODO 3: Import data students dari folder data/students.js
import students from "../data/students.js";

// Membuat Class StudentController
class StudentController {
  index(req, res) {
    // TODO 4: Tampilkan data students
    res.json({
      message: "Menampilkan semua students",
      data: students,
    });
  }

  store(req, res) {
    // TODO 5: Tambahkan data students
    const { nama } = req.body;
    students.push(nama);
    res.json({
      message: "Menambahkan  data students : ",
      data: students,
    });
  }

  update(req, res) {
    // TODO 6: Update data students
    const {id, nama} = req.body;
    students[id] = nama;
    res.json({
      message: "Mengedit data students",
      data: students,
    });
  }

  destroy(req, res) {
    // TODO 7: Hapus data students
    const {id} = req.body;
    students.splice(id, 1);
    res.json({
      message: "Menghapus data students",
      data: students,
    });
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
export default object;