<template>
  <div id="signalisation">
    <h3 class="i-name">Signalisation</h3>
    <div class="board">
      <table width="100%">
        <thead>
          <tr>
            <td>nom d'entreprise</td>
            <td>title d'offre</td>
            <td>nombre de signalisation</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="nomEntreprise">
              <img src="../../../assets/image/jobs/avatarEntre.png" alt="" />
              <a href="#">
                <h5>Geeck Fact</h5>
              </a>
            </td>
            <td class="Title Offre">
              <h5>Lorem ipsum dolor sit amet consectetur.</h5>
            </td>
            <td class="active">
              <p>30 signalisations</p>
            </td>
            <td class="UD">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <td class="nomEntreprise">
              <img src="../../../assets/image/jobs/avatarEntre.png" alt="" />
              <a href="#">
                <h5>Geeck Fact</h5>
              </a>
            </td>
            <td class="Title Offre">
              <h5>Lorem ipsum dolor sit amet consectetur.</h5>
            </td>
            <td class="active">
              <p>30 signalisations</p>
            </td>
            <td class="UD">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <td class="nomEntreprise">
              <img src="../../../assets/image/jobs/avatarEntre.png" alt="" />
              <a href="#">
                <h5>Geeck Fact</h5>
              </a>
            </td>
            <td class="Title Offre">
              <h5>Lorem ipsum dolor sit amet consectetur.</h5>
            </td>
            <td class="active">
              <p>30 signalisations</p>
            </td>
            <td class="UD">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <td class="nomEntreprise">
              <img src="../../../assets/image/jobs/avatarEntre.png" alt="" />
              <a href="#">
                <h5>Geeck Fact</h5>
              </a>
            </td>
            <td class="Title Offre">
              <h5>Lorem ipsum dolor sit amet consectetur.</h5>
            </td>
            <td class="active">
              <p>30 signalisations</p>
            </td>
            <td class="UD">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <td class="nomEntreprise">
              <img src="../../../assets/image/jobs/avatarEntre.png" alt="" />
              <a href="#">
                <h5>Geeck Fact</h5>
              </a>
            </td>
            <td class="Title Offre">
              <h5>Lorem ipsum dolor sit amet consectetur.</h5>
            </td>
            <td class="active">
              <p>30 signalisations</p>
            </td>
            <td class="UD">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <td class="nomEntreprise">
              <img src="../../../assets/image/jobs/avatarEntre.png" alt="" />
              <a href="#">
                <h5>Geeck Fact</h5>
              </a>
            </td>
            <td class="Title Offre">
              <h5>Lorem ipsum dolor sit amet consectetur.</h5>
            </td>
            <td class="active">
              <p>30 signalisations</p>
            </td>
            <td class="UD">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <td class="nomEntreprise">
              <img src="../../../assets/image/jobs/avatarEntre.png" alt="" />
              <a href="#">
                <h5>Geeck Fact</h5>
              </a>
            </td>
            <td class="Title Offre">
              <h5>Lorem ipsum dolor sit amet consectetur.</h5>
            </td>
            <td class="active">
              <p>30 signalisations</p>
            </td>
            <td class="UD">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <td class="nomEntreprise">
              <img src="../../../assets/image/jobs/avatarEntre.png" alt="" />
              <a href="#">
                <h5>Geeck Fact</h5>
              </a>
            </td>
            <td class="Title Offre">
              <h5>Lorem ipsum dolor sit amet consectetur.</h5>
            </td>
            <td class="active">
              <p>30 signalisations</p>
            </td>
            <td class="UD">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="pagination">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a class="active" href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">&raquo;</a>
    </div>
  </div>
</template>
<style>
#signalisation {
  min-height: 88vh;
}
#signalisation .i-name {
  color: #444a53;
  padding: 30px 30px 0 30px;
  font-size: 24px;
  font-weight: 700;
  margin-top: 70px;
}
#signalisation .section-signal {
  width: 94%;
  margin: 30px 0 30px 30px;
  overflow: auto;
}
#signalisation .board {
  width: 94%;
  margin: 30px 0 30px 30px;
  overflow: auto;
  background: #fff;
  border-radius: 8px;
}
#signalisation .board img {
  width: 45px;
  height: 45px;
  object-fit: cover;
  border-radius: 50%;
  margin-right: 15px;
}
#signalisation .board h5 {
  font-weight: 600;
  font-size: 14px;
}
#signalisation .board p {
  font-weight: 400;
  font-size: 13px;
  color: #787d8d;
}
#signalisation .board .nomEntreprise {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  text-align: start;
}
table {
  border-collapse: collapse;
}
tr {
  border: 1px solid #eef0f3;
}

thead td {
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 400;
  background: #f9fafb;
  text-align: start;
  padding: 15px;
}
tbody tr td {
  padding: 10px 15px;
}
tbody tr .nomEntreprise a:hover {
  text-decoration: underline;
}
#signalisation .active p {
  background: #fad7d7;
  padding: 2px 10px;
  display: inline-block;
  border-radius: 40px;
  color: #2b2b2b;
}
#signalisation .UD a {
  text-decoration: none;
  font-size: 14px;
  font-weight: 600;
  display: block;
  row-gap: 10px;
}
#signalisation .UD a:hover {
  text-decoration: underline;
}
#signalisation .UD a:nth-child(1) {
  color: #554cd1;
}
#signalisation .UD a:nth-child(2) {
  color: #d14c7f;
}
#signalisation .pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 12px;
}

.pagination a {
  color: black;
  float: left;
  padding: 5px 13px;
  text-decoration: none;
  border-radius: 100%;
}

.pagination a.active {
  background-color: #4caf50;
  color: white;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
}
</style>

