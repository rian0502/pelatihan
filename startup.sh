version: 1
runtime: php81
build:
  commands:
    build:
      # shellcheck disable=SC2215
      - chmod +x startup.sh
run:
  command: ./startup.sh
  ports:
    # shellcheck disable=SC2215
    - 80
  env:
    APP_PORT: 80