function clickHiddenProject(id) {
    formHidden = document.getElementById("modifi");
    if (formHidden.style.display === 'none') {
      formHidden.style.display = "block";
    } 

    let projectId = document.getElementById('projectId' + id).value;
    let name = document.getElementById('projectName' + id).innerText;
    let desc = document.getElementById('projectDesc' + id).innerText;
    let startDate = document.getElementById('startDate' + id).innerText;
    let endDate = document.getElementById('endDate' + id).innerText;

    console.log(name);

    document.getElementById('project_id2').value = projectId;
    let element = document.getElementById('projectNamee2');
    console.log(element);
    element.value = name;
    console.log(element.value);
    document.getElementById('projectDescription2').value = desc;
    document.getElementById('start_date2').value = startDate;
    document.getElementById('end_date2').value = endDate;



  }

  function hidePopupEdit(){
    formHidden = document.getElementById("modifi");
    if (formHidden.style.display === 'block') {
      formHidden.style.display = "none";
    }
  }