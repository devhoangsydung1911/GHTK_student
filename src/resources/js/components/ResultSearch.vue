<template>
  <div>
    <div id="result__search">
      <form action="">
        <div class="search_student">
          <div class="search_student-name">
            <span class="title-student">Họ tên</span>
            <input
              type="text"
              name="name_student"
              id=""
              v-model="student.name"
            />
          </div>
          <div class="search_student-id">
            <span class="title-student">Mã học sinh</span>
            <input type="text" name="id_student" id="" v-model="student.id" />
          </div>
        </div>

        <button type="button" @click="callDataChange">Tìm kiếm</button>
      </form>
    </div>
    <div id="table__student">
      <p class="notData" v-if="!show">Không có dữ liệu !</p>
      <table class="table" v-if="show">
        <thead>
          <tr>
            <td>STT</td>
            <td>Trường Tiểu Học</td>
            <td>Quận/Huyện</td>
            <td>Mã học sinh</td>
            <td>Lớp</td>
            <td>Họ và tên</td>
            <td>Ngày</td>
            <td>Tháng</td>
            <td>Năm</td>
            <td>Giới</td>
            <td>Nơi sinh</td>
            <td>Dân tộc</td>
            <td>Hộ khẩu thường chú</td>
            <td>Điện thoại liên hệ</td>
            <td>Tổng điểm năm lớp 1</td>
            <td>Tổng điểm năm lớp 2</td>
            <td>Tổng điểm năm lớp 3</td>
            <td>Tổng điểm năm lớp 4</td>
            <td>Tổng điểm năm lớp 5</td>
            <td>Tổng điểm kết quả 5 năm</td>
            <td>Điểm ưu tiên</td>
            <td>Tổng điểm sơ tuyển</td>
            <td>Ghi chú</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(student, index) in this.resultStudent" :key="index">
            <td>{{ student.stt }}</td>
            <td>{{ student.truong_tieu_hoc }}</td>
            <td>{{ student.quan_huyen }}</td>
            <td>{{ student.ma_hoc_sinh }}</td>
            <td>{{ student.lop }}</td>
            <td>{{ student.ho_va_ten }}</td>
            <td>{{ student.ngay }}</td>
            <td>{{ student.thang }}</td>
            <td>{{ student.nam }}</td>
            <td>{{ student.gt }}</td>
            <td>{{ student.noi_sinh }}</td>
            <td>{{ student.dan_toc }}</td>
            <td>{{ student.ho_khau_thuong_chu }}</td>
            <td>{{ student.dien_thoai }}</td>
            <td>{{ student.class1 }}</td>
            <td>{{ student.class2 }}</td>
            <td>{{ student.class3 }}</td>
            <td>{{ student.class4 }}</td>
            <td>{{ student.class5 }}</td>
            <td>{{ student.classAll }}</td>
            <td>{{ student.diem_uu_tien }}</td>
            <td>{{ student.diem_so_tuyen }}</td>
            <td>{{ student.ghi_chu }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      student: {
        id: "",
        name: "",
      },
      resultStudent: [],
      show: false,
    };
  },
  methods: {
    callDataChange() {
      axios
        .post("api/search-data", {
          studentPost: this.student,
        })
        .then((res) => {
          this.resultStudent = res.data;
          if (this.resultStudent.length > 0) {
            this.show = true;
          } else {
            this.show = false;
          }
        });
    },
  },
};
</script>

<style scoped>
#table__student {
  display: block;
  overflow: auto;
  white-space: nowrap;

  margin-top: 50px;
}

.notData {
  font-weight: bold;
  display: flex;
  justify-content: center;
}

.table {
  border-collapse: collapse;
}

thead {
  font-weight: bold;
}

th,
td {
  border: 1px solid rgb(0, 0, 0);
  padding: 10px 5px;
}

tr:hover {
  background-color: coral;
}
#result__search {
  margin-top: 50px;
  display: flex;
  justify-content: center;
}
.title-student {
  display: inline-block;
  width: 150px;

  font-size: 20px;
}

input {
  padding: 5px 10px;
  font-size: 20px;
  width: 500px;

  outline: none;
  border: 1px solid #cfcccceb;
  border-radius: 5px;
}
.search_student-id {
  margin-top: 20px;
}

button {
  font-size: 18px;
  border-radius: 8px;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #ffffff;
  border: 1px solid #cfcccceb;
}

button:hover {
  cursor: pointer;
  background-color: #3b904b;
  color: white;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
