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
      
    // 
    const section  =  document.querySelector("section"),
    modeSwitch1 =  main.querySelector(".toggle-switch"),
    modeText1   =  main.querySelector(".mode-text");




    modeSwitch.addEventListener("click", () =>
    {
      section.classList.toggle("dark");

      if(section.classList.contains("dark"))
      {
        modeText1.innerText ="Dark Mode";
      }
      else
      {
        modeText1.innerText ="Light Mode"; 
      }

    }) 

    // 


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
    const summaryCards = document.querySelector('.summary-cards');
    const read = document.querySelector('.read');
    const create = document.querySelector('.create');
    const update = document.querySelector('.update');
    const drop = document.querySelector('.drop');

    // Set initial state to show summaryCards content
    summaryCards.style.opacity = 1;
    read.style.opacity = 0;
    create.style.opacity = 0;
    update.style.opacity = 0;
    drop.style.opacity = 0;
    

    sideBarList.forEach(list => {
        list.addEventListener('click', () => {
            document.querySelector('.special')?.classList.remove('special');
            list.classList.add('special');

            // Hide all items initially
            summaryCards.style.opacity = 0;
            read.style.opacity = 0;
            create.style.opacity = 0;
            update.style.opacity = 0;
            drop.style.opacity = 0;

            // Set initial z-index
            summaryCards.style.zIndex = 1;
            read.style.zIndex = 1;
            create.style.zIndex = 1;
            update.style.zIndex = 1;
            drop.style.zIndex = 1;
            


            

            // Show items based on the clicked hyperlink
            if (list.id === 'box_1') {
                summaryCards.style.opacity = 1;
                summaryCards.style.zIndex = 100;

            } else if (list.id === 'box_2') {
                read.style.opacity = 1;
                read.style.zIndex = 100;
            } else if (list.id === 'box_3') {
                create.style.opacity = 1;
                create.style.zIndex = 100;
            }
              else if (list.id === 'box_4') {
                update.style.opacity = 1;
                update.style.zIndex = 100;

            } else if (list.id === 'box_5') {
                drop.style.opacity = 1;
                drop.style.zIndex = 100;
            }           

            
        });
    });