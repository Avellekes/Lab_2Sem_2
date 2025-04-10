db.session.insertMany([
    {
      start: new Date("2025-04-06T10:30:00Z"),
      end: new Date("2025-04-06T11:30:00Z"),
      incoming: 500,
      outgoing: 100,
      ip: "192.168.1.10",
      cost: 1.5
    },
    {
      start: new Date("2025-04-05T11:30:00Z"),
      end: new Date("2025-04-05T12:30:00Z"),
      incoming: 700,
      outgoing: 200,
      ip: "192.168.1.10",
      cost: 2.0
    },
    {
      start: new Date("2025-04-04T12:30:00Z"),
      end: new Date("2025-04-04T13:30:00Z"),
      incoming: 300,
      outgoing: 50,
      ip: "192.168.1.11",
      cost: 1.0
    },
    {
      start: new Date("2025-04-03T13:30:00Z"),
      end: new Date("2025-04-03T14:30:00Z"),
      incoming: 900,
      outgoing: 400,
      ip: "192.168.1.12",
      cost: 2.8
    },
    {
      start: new Date("2025-04-02T14:30:00Z"),
      end: new Date("2025-04-02T15:30:00Z"),
      incoming: 600,
      outgoing: 100,
      ip: "192.168.1.12",
      cost: 1.9
    },
    {
      start: new Date("2025-04-01T15:30:00Z"),
      end: new Date("2025-04-01T16:30:00Z"),
      incoming: 1000,
      outgoing: 600,
      ip: "192.168.1.13",
      cost: 3.2
    }
  ])
  