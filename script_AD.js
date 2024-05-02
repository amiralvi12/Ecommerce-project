



const main       =  document.querySelector("main"),
      sidebar    =  main.querySelector(".sidebar"),
      toggle     =  main.querySelector(".toggle"),
      searchBtn  =  main.querySelector(".search-box"),
      modeSwitch =  main.querySelector(".toggle-switch"),
      modeText   =  main.querySelector(".mode-text");

      toggle.addEventListener("click", () =>
      {
        sidebar.classList.toggle("close");


      })


      modeSwitch.addEventListener("click", () =>
      {
        main.classList.toggle("dark");

        if(main.classList.contains("dark"))
        {
          modeText.innerText ="Dark Mode";
        }
        else
        {
          modeText.innerText ="Light Mode"; 
        }

      })      


      const sideBarList_1 = document.querySelectorAll('.box');

      sideBarList_1.forEach(list => {
          list.addEventListener('click', () => {
              // Remove 'special' class from any previously clicked item
              document.querySelectorAll('.box').forEach(item => {
                  item.classList.remove('special');
              });
      
              // Add 'special' class to the clicked item
              list.classList.add('special');
          });
      });


      
      

    const sideBarList = document.querySelectorAll('.box');
    const mainCards = document.querySelector('.main-cards');
    const recentOrders = document.querySelector('.recent_orders');
    const settings = document.querySelector('.settings');

    // Set initial state to show main-cards content
    mainCards.style.opacity = 1;
    recentOrders.style.opacity = 0;
    settings.style.opacity = 0;
    

    sideBarList.forEach(list => {
        list.addEventListener('click', () => {
            document.querySelector('.special')?.classList.remove('special');
            list.classList.add('special');

            // Hide all items initially
            mainCards.style.opacity = 0;
            recentOrders.style.opacity = 0;
            settings.style.opacity = 0;

            // Show items based on the clicked hyperlink
            if (list.id === 'box_1') {
                mainCards.style.opacity = 1;
            } else if (list.id === 'box_2') {
                recentOrders.style.opacity = 1;
            } else if (list.id === 'box_3') {
                settings.style.opacity = 1;
            }
        });
    });