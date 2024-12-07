<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <style>
    .set:hover {
      background-color: black;
      color: black;
      font-size: 15px;
    }
  </style>
  <body
    style="
      font-family: Arial, sans-serif;
      margin-top: 0;
      margin-left: 0;
      margin-right: 0;
    "
  >
    <div
      class=""
      style="
        height: 70px;
        background-color: white;
        color: rgb(99, 99, 148);
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        padding: 25px;
      "
    >
      Admin Panel
    </div>
    <div style="width: 100%; height: 570px; display: flex">
      <div style="width: 20%; height: 570px; box-shadow: 3px 3px 2px">
        <div
          style="
            height: 30px;
            background-color: white;
            width: 90%;
            box-shadow: 1px 1px 1px;
            color: rgb(146, 146, 192);
            margin-top: 15px;
            display: flex;
            align-items: center;
            text-align: center;
            padding-left: 25px;
            margin-left: 10px;
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-bag-dash"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M5.5 10a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"
            />
            <path
              d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"
            />
          </svg>
          <div style="margin-left: 25px; font-family: Garamond, serif">
            DASHBOARD
          </div>
        </div>
        <div
          class="set"
          style="
            height: 30px;
            background-color: white;
            width: 90%;
            color: rgb(106, 113, 116);
            margin-top: 15px;
            display: flex;
            align-items: center;
            text-align: center;
            padding-left: 25px;
            margin-left: 10px;
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-gear"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"
            />
            <path
              d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"
            />
          </svg>
          <div style="margin-left: 25px; font-family: Garamond, serif">
            <a style="text-decoration: none; color: rgb(146, 146, 192)" href="h"
              >SETTING</a
            >
          </div>
        </div>
        <div
          class="set"
          style="
            height: 30px;
            background-color: white;
            width: 90%;
            color: rgb(106, 113, 116);
            margin-top: 15px;
            display: flex;
            align-items: center;
            text-align: center;
            padding-left: 25px;
            margin-left: 10px;
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-cloud-arrow-up"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z"
            />
            <path
              d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"
            />
          </svg>
          <div style="margin-left: 25px; font-family: Garamond, serif">
            <a
              style="text-decoration: none; color: rgb(146, 146, 192)"
              href="upload.php"
              >UPLOADING</a
            >
          </div>
        </div>
        <div
          class="set"
          style="
            height: 30px;
            background-color: white;
            width: 90%;
            color: rgb(106, 113, 116);
            margin-top: 15px;
            display: flex;
            align-items: center;
            text-align: center;
            padding-left: 25px;
            margin-left: 10px;
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-file-earmark-lock"
            viewBox="0 0 16 16"
          >
            <path
              d="M10 7v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V9.3c0-.627.46-1.058 1-1.224V7a2 2 0 1 1 4 0M7 7v1h2V7a1 1 0 0 0-2 0M6 9.3v2.4c0 .042.02.107.105.175A.64.64 0 0 0 6.5 12h3a.64.64 0 0 0 .395-.125c.085-.068.105-.133.105-.175V9.3c0-.042-.02-.107-.105-.175A.64.64 0 0 0 9.5 9h-3a.64.64 0 0 0-.395.125C6.02 9.193 6 9.258 6 9.3"
            />
            <path
              d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"
            />
          </svg>
          <div style="margin-left: 25px; font-family: Garamond, serif">
            <a style="text-decoration: none; color: rgb(146, 146, 192)" href="h"
              >PASSWORD RESET</a
            >
          </div>
        </div>
        <div
          class="set"
          style="
            height: 30px;
            background-color: white;
            width: 90%;
            color: rgb(106, 113, 116);
            margin-top: 15px;
            display: flex;
            align-items: center;
            text-align: center;
            padding-left: 25px;
            margin-left: 10px;
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-coin"
            viewBox="0 0 16 16"
          >
            <path
              d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"
            />
            <path
              d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
            />
            <path
              d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"
            />
          </svg>
          <div style="margin-left: 25px; font-family: Garamond, serif">
            <a style="text-decoration: none; color: rgb(146, 146, 192)" href="h"
              >SUBSCRIPTION</a
            >
          </div>
        </div>
      </div>
      <div
        class="container"
        style="
          width: 80%;
          height: 100%;
          text-align: center;
          background-color: rgb(235, 238, 240);
          display: flex;
          align-items: center;
          flex-direction: column;
          justify-content: center;
        "
      >
        <div
          style="
            width: 95%;
            height: 40px;
            display: flex;
            justify-content: space-between;
          "
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-cloud-arrow-up"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z"
              />
              <path
                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"
              />
            </svg>
            <a
              style="
                margin-left: 10px;
                font-family: Garamond, serif;
                color: rgb(90, 90, 161);
                font-size: 20px;
              "
              >Uploading</a
            >
          </div>
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-card-checklist"
              viewBox="0 0 16 16"
            >
              <path
                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"
              />
              <path
                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"
              />
            </svg>
            <a
              style="
                margin-left: 10px;
                font-family: Garamond, serif;
                color: rgb(90, 90, 161);
              "
              >Note</a
            >
          </div>
        </div>

        <div
          style="
            height: 80%;
            width: 95%;
            background-color: white;
            color: rgb(57, 57, 201);
            font-size: 25px;
          "
        >
          <form
            action="upload_course.php"
            method="POST"
            enctype="multipart/form-data"
          >
            <div class="mb-3 mt-3">
              <label for="title" class="form-label" style="float: left;    font-family: Garamond, serif; margin-right: 10px; margin-top: 10x; margin-left: 10px;">Course title</label>
              <input
                type="text"
                class="form-control"
                name="title"
                placeholder="course title"
                required
                style="width: 50%; height:30px;"
              />
            </div>

            <div class="mb-3" style="display: flex; align-items: center;">
  <label for="description" class="form-label" style="float: left;  font-family: Garamond, serif; margin-right: 10px; margin-top: 10x; margin-left: 10px;">Course note</label>
              <textarea
                class="form-control"
                name="description"
                rows="2"
                style="width: 50%;  "
                required
              ></textarea>
            </div>
            <div style="margin-top: 15px">
              <label style="font-family: Garamond, serif" for="image"
                >Course Image:</label
              >
              <input
                style="height: 50px; width: 50%; font-family: Garamond, serif; ;"
                type="file"
                name="image"
                accept="image/*"
                required
                
              />
            </div>

          <div  style="height: 50px; width: 70%; margin-left:60px">  <button style="font-family: Garamond, serif;
            width: 50%; color: white; background-color: green; margin-top: 10px; border: none; border-radius: 5px;  height:40px
            " type="submit">
              Upload Course
            </button>
  </div>
          </form>
          
      
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
