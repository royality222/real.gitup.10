<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

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
    <nav
      style="
        width: 100%;
        position: fixed;
        z-index: 8888888888888888;
        margin-top: -80px;
      "
      class="bg-white shadow-md p-4 flex items-center justify-between"
    >
      <div class="flex items-center">
        <img
          alt="Institute of Reading Development Logo"
          class="h-11"
          style="height: 50px; width: 50px"
          src="download__1_-removebg-preview.png"
        />
        <span
          class="ml-2 text-xl font-bold"
          style="color: rgb(12, 24, 100); font-weight: bold; line-height: 15px"
        >
          <a style="font-size: 10px">INSTITUTE OF</a> <br />
          READING DEVELOPMENT
        </span>
      </div>
    </nav>

    <div style="width: 100%; height: 570px; display: flex; margin-top: 80px">
      <div class="dropdown" style="margin-top: 30px; position: fixed">
        <button
          class="btn"
          type="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
          style="
            width: 50%;
            border: none;
            z-index: 888888888888888888888888888888;
          "
        >
          <img
            style="height: 30px; width: 110px; margin-top: 10px"
            src="download__3_-removebg-preview.png"
          />
        </button>
        <ul class="dropdown-menu dropdown-menu-white" style="border: none">
          <div
            style="
              width: 300px;
              height: 700px;
              box-shadow: 3px 3px 2px;
              padding-right: 20px;
              position: relative;
              color: black;
              margin-top: -75px;
              background-color: white;
              padding-top: 20px;
            "
          >
            <div
              class="set"
              style="
                height: 30px;
                background-color: white;
                width: 94%;
                color: black;
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
                <a
                  style="text-decoration: none; color: black"
                  href="h"
                  >Setting</a
                >
              </div>
            </div>

            <div
              class="set"
              style="
                height: 30px;
                background-color: white;
                width: 90%;
                color: black;
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
                  style="text-decoration: none; color: black"
                  href="upload.php"
                  >Uploading</a
                >
              </div>
            </div>
            <div
              class="set"
              style="
                height: 30px;
                background-color: white;
                width: 90%;
                color: black;
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
                <a
                  style="text-decoration: none; color: black"
                  href="h"
                  >Password reset</a
                >
              </div>
            </div>
            <div
              class="set"
              style="
                height: 30px;
                background-color: white;
                width: 90%;
                color: black;
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
                <a
                  style="text-decoration: none; color: black"
                  href="h"
                  >Subscription</a
                >
              </div>
            </div>
          </div>
        </ul>
      </div>












      
      <div
        class="container"
        style="
          width: 90%;
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
            width: 80%;
            height: 40px;
            display: flex;
            justify-content: space-between;
          "
        >
          <div>
            <a
              style="
                margin-left: 10px;
                font-family: Garamond, serif;
                color: black;
                font-size: 20px;
              "
              >Uploading</a
            >
          </div>
          <div>
            <a
              style="
                margin-left: 10px;
                font-family: Garamond, serif;
                color: black;
              "
              >Note</a
            >
          </div>
        </div>

        <div
          style="
            height: 80%;
            width: 90%;
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
              <label
                for="title"
                class="form-label"
                style="
                  float: left;
                  font-family: Garamond, serif;
                  margin-right: 10px;
                  margin-top: 10x;
                  margin-left: 10px;
                  color: black;
                "
                >Course title</label
              >
              <input
                type="text"
                class="form-control"
                name="title"
                placeholder="course title"
                required
                style="width: 50%; height: 30px"
              />
            </div>

            <div class="mb-3" style="display: flex; align-items: center">
              <label
                for="description"
                class="form-label"
                style="
                  float: left;
                  font-family: Garamond, serif;
                  margin-right: 10px;
                  margin-top: 10x;
                  margin-left: 10px;
                  color: black;
                "
                >Course note</label
              >
              <textarea
                class="form-control"
                name="description"
                rows="2"
                style="width: 50%"
                required
              ></textarea>
            </div>
            <div style="margin-top: 15px">
              <label style="font-family: Garamond, serif" for="image"
                >Course Image:</label
              >
              <input
                style="height: 50px; width: 50%; font-family: Garamond, serif"
                type="file"
                name="image"
                accept="image/*"
                required
              />
            </div>

            <div style="height: 50px; width: 70%; margin-left: 60px">
              <button
                style="
                  font-family: Garamond, serif;
                  width: 50%;
                  color: black;
                 background-color: rgb(38, 98, 237);
                  margin-top: 10px;
                  border: none;
                  border-radius: 5px;
                  height: 40px;
                "
                type="submit"
              >
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
    <div
    class="py-10 flex flex-col md:flex-row justify-between items-center"
    style="
      background-color: rgb(53, 72, 167);
      padding-left: 160px;
      padding-right: 160px;
    "
  >
    <div class="flex flex-col items-center md:items-start">
      <span
        class="ml-2 text-xl font-bold"
        style="
          color: black;
          font-weight: bold;
          line-height: 25px;
          font-size: 30px;
        "
      >
        <a style="font-size: 15px">INSTITUTE OF</a> <br />
        READING DEVELOPMENT
      </span>
    
    </div>
    <div class="text-center md:text-left mt-6 md:mt-0">
      <h2 class="font-bold mb-2" style="font-size: 25px">Contact</h2>
      <p>+2348113440806</p>
      <p>adelekeganiyu69@gmail.com</p>
    </div>
    <div class="text-center md:text-right mt-6 md:mt-0">
      <h2 class="font-bold mb-2" style="font-size: 25px">Follow Us</h2>
      <div class="flex justify-center md:justify-end space-x-2">
        <div class="w-4 h-4 bg-dark rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path
              d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"
            />
          </svg>
        </div>
        <div class="w-5 h-5 bg-dark rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path
              d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"
            />
          </svg>
        </div>
        <div class="w-4 h-4 bg-dark rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
            />
          </svg>
        </div>
        <div class="w-4 h-4 bg-dark rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path
              d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
            />
          </svg>
        </div>
      </div>
    </div>
  </body>
</html>
