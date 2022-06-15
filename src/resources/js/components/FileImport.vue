<template>
  <div id="file__import">
    <div class="content">
      <form method="POST" enctype="multipart/form-data">
        <label for="fileXlSX" class="labelInput">
          <input
            type="file"
            name="fileExcel"
            id="fileXlSX"
            @change="inputFile"
            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
          />
          <div>
            <i class="fa fa-file-excel-o" aria-hidden="true"></i>
          </div>
          <div>
            <p>{{ this.fileName }}</p>
          </div>
          <button type="button" @click="sendFile()" v-show="showButton">
            Import File to Database
          </button>
        </label>
      </form>
      {{ this.response }}
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      fileName: "Chọn File Input hoặc kéo thả File",
      res: {},
      showButton: false,
      response: "",
      fileExcel: null,
    };
  },
  methods: {
    inputFile(event) {
      if (this.fileName) {
        this.fileName = event.target.files[0].name;
        this.fileExcel = event.target.files[0];
      }
      if (event.target.files.length !== 0) {
        this.showButton = true;
      }
    },
    async sendFile() {
      let formData = new FormData();
      formData.append("fileExcel", this.fileExcel);
      let res = await axios.post("api/import-file", formData);
      window.location.href = "/result-search";
    },
  },
};
</script>

<style scoped>
#file__import {
  margin-top: 50px;
}
.content {
  margin: 0 auto;
}

.labelInput {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  background-color: rgb(55, 137, 221);
  width: 50%;
  height: 150px;
  margin: 0 auto;

  border-radius: 10px;
}
.labelInput:hover {
  cursor: pointer;
}

.fa {
  font-size: 45px;
  color: wheat;
}

p {
  font-size: 20px;
  color: white;
  margin-top: 10px;
}

input {
  display: none;
}

button {
  font-size: 18px;
  border-radius: 8px;
  margin-top: 10px;
  padding: 10px 20px;
  background-color: #ffffff;
  border: none;
}

button:hover {
  cursor: pointer;
  background-color: #3b904b;
  color: white;
}
</style>
