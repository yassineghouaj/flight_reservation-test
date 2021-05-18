document.getElementById('2form').style.display = "none";
document.getElementById('3form').style.display = "none";





function reserv(){

    var way = document.getElementById("onew");
    var selectedway = way.options[way.selectedIndex].text;

    var fcountry = document.getElementById("fcountry");
    var selectedfcountry = fcountry.options[fcountry.selectedIndex].text;

    var tcountry = document.getElementById("tcountry");
    var selectedtcountry = tcountry.options[tcountry.selectedIndex].text;

    var seats = document.getElementById("seats");
    var selectedseats = seats.options[seats.selectedIndex].text;
    

    
    if (selectedway == 'one Way'){
        if (selectedfcountry == 'Morocco'){
            if (selectedtcountry == 'Brazil'){
               if(selectedseats == '1 seat'){
                Swal.fire(
                    'You reservation has been set !!!!'
                  )
               }else if(selectedseats == '2 seat'){
                     
                     alert(
                         'fill seconde passanger info bellow'
                     )
                     document.getElementById('2form').style.display = "block";
                
                      
               }else if(selectedseats == '3 seat'){

                Swal.fire(
                    'You reservation has been set !!!!'
                    
                  )
                    

                    document.getElementById('2form').style.display = "block";
                    document.getElementById('3form').style.display = "block";
               }
                  
               }

            }

        }else if(selectedway == 'round trip'){

            if (selectedfcountry == 'Morocco'){
                if (selectedtcountry == 'Brazil'){
                   if(selectedseats == '1 seat'){
                    Swal.fire(
                        'You reservation has been set !!!!'
                      )
                   }else if(selectedseats == '2 seat'){
                         
                         alert(
                             'fill seconde passanger info bellow'
                         )
                         document.getElementById('2form').style.display = "block";
                          
                   }else if(selectedseats == '3 seat'){
    
                        'fill passangers info bellow'
    
                        document.getElementById('2form').style.display = "block";
                        document.getElementById('3form').style.display = "block";
                   }
                      
                   }
    
                }

        }




    }