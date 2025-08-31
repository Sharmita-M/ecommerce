

   const sidebar = document.getElementById('sidebarContainer');
  const toggleBtn = document.getElementById('sidebarToggle');
  const mainContent = document.getElementById('mainContent');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('d-none');
    mainContent.classList.toggle('col-md-12');
    mainContent.classList.toggle('col-md-10');
  });

//ck editor
document.addEventListener("DOMContentLoaded", function () {
  if (typeof CKEDITOR === "undefined") {
    console.error("CKEditor not loaded.");
    return;
  }

  const users = [
    { id: 1, username: "jdoe", fullname: "John Doe" },
    { id: 2, username: "jsmith", fullname: "Jane Smith" },
    // Add more if you want
  ];

  function dataFeed(opts, callback) {
    const match = users.filter(user =>
      user.username.toLowerCase().startsWith(opts.query.toLowerCase())
    );
    callback(match);
  }

  const editorElement = document.getElementById("editor1");

  if (editorElement) {
    const editor = CKEDITOR.replace("editor1", {
      height: 300,
      extraPlugins: "mentions",
      mentions: [
        {
          feed: dataFeed,
          itemTemplate: `
            <li data-id="{id}">
              <strong>{username}</strong> <span>{fullname}</span>
            </li>
          `,
          outputTemplate: `
            <a href="mailto:{username}@example.com">@{username}</a><span>&nbsp;</span>
          `,
          minChars: 0
        }
      ]
    });

    editor.on("instanceReady", function (evt) {
      CKEDITOR.tools.array.forEach(
        evt.editor.plugins.mentions.instances,
        function (mentionsInstance) {
          mentionsInstance._autocomplete.model.on("change-isActive", function (evt) {
            console.log("Mentions visible:", evt.data);
          });
        }
      );
    });
  } else {
    console.warn("#editor1 not found");
  }
});

//data table
$(document).ready(function() {
  $('#example').DataTable({
    dom: '<"dt-buttons btn-group mb-3"Bf><"clear">lirtp',
    pageLength: 5,
    lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
    buttons: [
      {
        extend: 'colvis',
        className: 'btn btn-secondary-emphasis'
      },
      {
        extend: 'copyHtml5',
        className: 'btn btn-secondary-emphasis'
      },
      {
        extend: 'csvHtml5',
        className: 'btn btn-secondary-emphasis'
      },
      {
        extend: 'excelHtml5',
        className: 'btn btn-secondary-emphasis'
      },
      {
        extend: 'pdfHtml5',
        className: 'btn btn-secondary-emphasis'
      },
      {
        extend: 'print',
        className: 'btn btn-secondary-emphasis'
      }
    ]
  });
});



  