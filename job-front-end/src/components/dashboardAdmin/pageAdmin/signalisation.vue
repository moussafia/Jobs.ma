<template>
  <div id="signalisation">
    <h3 class="i-name">Signalisation</h3>
    <div
      class="flex items-center justify-between py-4  section-signal"
    >
      <div>
        <button
          id="dropdownActionButton"
          data-dropdown-toggle="dropdownAction"
          class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
          type="button"
        >
          <span class="sr-only">Action button</span>
          Action
          <svg
            class="w-3 h-3 ml-2"
            aria-hidden="true"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M19 9l-7 7-7-7"
            ></path>
          </svg>
        </button>
        <!-- Dropdown menu -->
        <div
          id="dropdownAction"
          class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
        >
          <ul
            class="py-1 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="dropdownActionButton"
          >
            <li>
              <a
                href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Reward</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Promote</a
              >
            </li>
            <li>
              <a
                href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Activate account</a
              >
            </li>
          </ul>
          <div class="py-1">
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
              >Delete User</a
            >
          </div>
        </div>
      </div>
      <label for="table-search" class="sr-only">Search</label>
      <div class="relative">
        <div
          class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
        >
          <svg
            class="w-5 h-5 text-gray-500 dark:text-gray-400"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <input
          type="text"
          id="table-search-users"
          class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Search for users"
        />
      </div>
    </div>
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
  margin: 8px 0 30px 30px;
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
