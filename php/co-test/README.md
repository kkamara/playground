# CO-Test

API-consuming Architecture Proposal - working with external services.

## Installation

Install [Docker](https://docs.docker.com/get-docker/) and [Docker Compose](https://docs.docker.com/compose/install/).


```
# build & run your docker containers
# app is then viewable at http://localhost:8000/
make dev 
```

## The problem

We want a system that has the ability to query remote endpoints. The system should be built for the future. 

## The solution

All we are really interested in is how we would build the the system that would solve our problem. The following shows a detailed outline of the `app\Models` directory. We solve our problem by taking an interface approach. We also take [separation of concerns](https://en.wikipedia.org/wiki/Separation_of_concerns) into account and we've opted to group relevant data (as should standard practice).

    app/Models/
    ├── CallStat
    │   ├── CallStat.php
    │   └── CallStatRelations.php
    ├── Campaign
    │   ├── Campaign.php
    │   └── CampaignRelations.php
    ├── Foreign
    │   ├── Foreign.php
    │   └── ForeignRelations.php
    ├── QueryType
    │   ├── QueryType.php
    │   └── QueryTypeRelations.php
    ├── Services
    │   ├── Consumers
    │   │   ├── Interfaces
    │   │   │   └── IForeign.php
    │   │   └── Foreign.php
    │   └── Producers
    │       ├── Interfaces
    │       │   ├── IMicroserviceA.php
    │       │   ├── IMicroserviceB.php
    │       │   └── IMicroserviceC.php
    │       ├── MicroserviceA.php
    │       ├── MicroserviceB.php
    │       └── MicroserviceC.php
    └── User.php

#### Why use interfaces for service models?

Interfaces enforce a strict standard that must be adhered to. That gives us security in building each service to fit its purpose only.

#### How do we take SoC into account?

We apply the *separation of concerns* princible by (*where required*) designating each class model to their own directories.

We mainly do this in our own service models (e.g. `CallStat::class`), where multiple files are required for the same purpose. For example: our `CallStatRelations` trait is dedicated to `CallStat::class` so it's only right they belong in the same folder. This gives us confidence that relevant files are correlated.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[GPL-3.0](https://choosealicense.com/licenses/gpl-3.0/)