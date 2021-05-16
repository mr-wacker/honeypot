# Ansible's Structure

- inventory file : ansible.cfg 
- global varaibles : group_vars/all.yaml
- hosts : hosts information

# Modules

Honeypot deploys fs to confine attackers to log their behaviours.

MariaDB will receive logs

Nginx deploys Wordpress with vulnerable plugin that allows attacker to get into the system

Grafana helps visualisation of data

# Schema

### Essential components
 - Nginx - to get access to the Grafana, make a default HTML page with links to deb stuff.
 - MySQL/MariaDB - to store data from the honeypot
 - Grafana - sexy graphs
 - Cowrie - honeypot
 - Docker - can contain anything but primarily honeypot and Grafana.
 - Bind - use domain names instead of IPs

### For better resiliency/convenience:
 - Rsyslog to possibly catch some additional logs?
 - HAProxy/Backup/VRRP and so on for additional points/more serious infrastracture




# Directory Structure

```shell
.
├── README.md
├── ansible.cfg
├── bind.yaml
├── debug.yaml
├── docker-cowrie.yaml
├── docker-grafana.yaml
├── docker-install.yaml
├── group_vars
│   └── all.yaml
├── honeypot-infrastracture.yaml
├── hosts
├── init.yaml
├── roles
│   ├── bind
│   │   ├── files
│   │   │   ├── nsupdate.key
│   │   │   └── transfer.key
│   │   ├── handlers
│   │   │   └── main.yaml
│   │   ├── tasks
│   │   │   └── main.yaml
│   │   └── templates
│   │       ├── db.forward.j2
│   │       ├── db.reverse.j2
│   │       ├── named.conf.local.j2
│   │       └── named.conf.options.j2
│   ├── docker-cowrie
│   │   ├── tasks
│   │   │   └── main.yaml
│   │   └── templates
│   │       ├── cowrie.cfg.j2
│   │       └── userdb.txt.j2
│   ├── docker-grafana
│   │   └── tasks
│   │       └── main.yaml
│   ├── docker-install
│   │   └── tasks
│   │       └── main.yaml
│   ├── docker-mariadb
│   │   ├── files
│   │   │   └── cowrie_database_setup.sql
│   │   ├── handlers
│   │   │   └── main.yaml
│   │   ├── tasks
│   │   │   └── main.yaml
│   │   └── templates
│   │       └── override.cnf.j2
│   ├── nginx
│   │   ├── handlers
│   │   │   └── main.yaml
│   │   ├── tasks
│   │   │   └── main.yaml
│   │   └── templates
│   │       ├── default.j2
│   │       └── index.html.j2
│   ├── resolve-config
│   │   ├── tasks
│   │   │   └── main.yaml
│   │   └── templates
│   │       └── resolv.conf.j2
│   └── users
│       └── tasks
│           └── main.yaml
├── test-connection.yaml

```

