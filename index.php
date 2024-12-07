<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="novel.css" />

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
        height: 100px;
        background-color: white;
        color: rgb(99, 99, 148);
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        padding: 25px;
        position: fixed;
        width: 100%;
        z-index: 88888888888888888;
      "
    >
      Student page
    
      <div class="btn-group" style="float: right;">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Courses
        </button>
        <ul class="dropdown-menu">
          <select id="courses" onchange="loadCourse()">
            <option value="" disabled selected>Select course</option>
        </select>
        </ul>
      </div>



    </div>
    <div style="width: 100%; height: 570px; display: flex">
    <div style="width: 20%; height: 500px; margin-top: 100px; position: fixed; background-color: white; ">
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
            MAIN
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
            <a style="text-decoration: none; color: rgb(48, 48, 182)" href="h"
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
          margin-left: 20%;
         
        "
      >
        <div
          style="
            width: 80%;
            height: 40px;
            display: flex;
            position: fixed;
            margin-top: 30px;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            border: 1px solid gray;
            border-left: none;
            border-right: none;
            border-top:none ;
            margin-left: -13px;
            padding-left: 10px;
            padding-right: 10px;
            
            
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
              >Note</a
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
              >Download note</a
            >
          </div>
        </div>
 
        <div class="container" style="margin-top: 70px;">
  <section class="course-display">
      <div id="course-content" class="course-content">
          <h2 id="course-title">Course Title</h2>
          <img id="course-image" src="" alt="Course Image">
          <p id="course-description">Select a course to see its details.</p>
      </div>
  </section>
</div>
<script>document.addEventListener('DOMContentLoaded', fetchCourses);

function fetchCourses() {
fetch('fetch_courses.php')
  .then(response => response.json())
  .then(data => {
      const select = document.getElementById('courses');
      data.forEach(course => {
          const option = document.createElement('option');
          option.value = course.id;
          option.textContent = course.title;
          select.appendChild(option);
      });
  })
  .catch(err => console.error('Error fetching courses:', err));
}

function loadCourse() {
const selectedCourseId = document.getElementById('courses').value;
fetch(`fetch_course.php?id=${selectedCourseId}`)
  .then(response => response.json())
  .then(course => {
      document.getElementById('course-title').textContent = course.title;
      document.getElementById('course-image').src = course.image;
      document.getElementById('course-description').textContent = course.description;
      document.getElementById('course-content').style.display = 'block';
  })
  .catch(err => console.error('Error loading course:', err));
}
</script>
      
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
