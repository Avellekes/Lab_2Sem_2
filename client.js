db.client.insertMany([
  {
    login: "user1",
    password: "pass1",
    ip: "192.168.1.10",
    balance: 10.5,
    message: "Привіт"
  },
  {
    login: "user2",
    password: "pass2",
    ip: "192.168.1.11",
    balance: -5.0,
    message: "Поповни мені рахунок"
  },
  {
    login: "user3",
    password: "pass3",
    ip: "192.168.1.12",
    balance: 3.25,
    message: "Як справи?"
  },
  {
    login: "user4",
    password: "pass4",
    ip: "192.168.1.13",
    balance: 0,
    message: "Допоможи"
  }
])
