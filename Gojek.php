{
	"info": {
		"_postman_id": "3e9c1504-14c0-b19b-0574-57104e01b79f",
		"name": "Go-Jek",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
	},
	"item": [
		{
			"name": "Login with email",
			"request": {
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n  \"email\": \"vaugusman@gmail.com\"\n}"
				},
				"url": {
					"raw": "https://api.gojekapi.com/v3/customers/login_with_email",
					"protocol": "https",
					"host": [
						"api",
						"gojekapi",
						"com"
					],
					"path": [
						"v3",
						"customers",
						"login_with_email"
					]
				}
			},
			"response": []
		},
		{
			"name": "Customer token",
			"request": {
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n  \"scopes\": \"gojek:customer:transaction gojek:customer:readonly\",\n  \"grant_type\": \"password\",\n  \"login_token\": \"LOGIN TOKEN FROM LOGIN WITH EMAIL API\",\n  \"otp\": \"7079\",\n  \"client_id\": \"gojek:cons:android\",\n  \"client_secret\": \"random secret\"\n}"
				},
				"url": {
					"raw": "https://api.gojekapi.com/v3/customers/token",
					"protocol": "https",
					"host": [
						"api",
						"gojekapi",
						"com"
					],
					"path": [
						"v3",
						"customers",
						"token"
					]
				}
			},
			"response": []
		},
		{
			"name": "Booking go-ride",
			"request": {
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					},
					{
						"key": "Authorization",
						"value": "{{authorization}}"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n  \"destination_lat_long\": \"-6.290372,106.6993585\",\n  \"destination_note\": \"FILL_THIS\",\n  \"service_type\": 1,\n  \"origin_note\": \"\",\n  \"destination_address\": \"FILL_THIS\",\n  \"origin_lat_long\": \"-6.290372,106.6993585\",\n  \"estimate_token\": \"ESTIMATE_TOKEN_FROM_CALCULATE_API\",\n  \"origin_address\": \"8\",\n  \"activity_source\": 2,\n  \"gcm_key\": \"\",\n  \"payment_type\": 4,\n  \"origin_name\": \"FILL_THIS\",\n  \"device_token\": \"\",\n  \"destination_name\": \"FILL_THIS\"\n}"
				},
				"url": {
					"raw": "https://api.gojekapi.com/go-ride/v4/bookings",
					"protocol": "https",
					"host": [
						"api",
						"gojekapi",
						"com"
					],
					"path": [
						"go-ride",
						"v4",
						"bookings"
					]
				}
			},
			"response": []
		},
		{
			"name": "Calculate price",
			"request": {
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					},
					{
						"key": "Authorization",
						"value": "{{authorization}}"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n  \"vehicle_type\": \"bike\",\n  \"paymentType\": \"0\",\n  \"routeRequests\": [{\n    \"destinationLatLong\": \"-6.290372,106.6993585\",\n    \"originLatLong\": \"-6.290372,106.6994585\",\n    \"serviceType\": 1\n  }],\n  \"corporateId\": \"\",\n  \"serviceType\": 1,\n  \"region\": \"\",\n  \"marketplaceType\": \"\",\n  \"customerId\": \"FILL_THIS\"\n}"
				},
				"url": {
					"raw": "https://api.gojekapi.com/gojek/v2/calculate/gopay",
					"protocol": "https",
					"host": [
						"api",
						"gojekapi",
						"com"
					],
					"path": [
						"gojek",
						"v2",
						"calculate",
						"gopay"
					]
				}
			},
			"response": []
		},
		{
			"name": "Booking History",
			"request": {
				"auth": {
					"type": "basic",
					"basic": [
						{
							"key": "username",
							"value": "",
							"type": "string"
						},
						{
							"key": "password",
							"value": "",
							"type": "string"
						},
						{
							"key": "saveHelperData",
							"value": true,
							"type": "boolean"
						},
						{
							"key": "showPassword",
							"value": false,
							"type": "boolean"
						}
					]
				},
				"method": "GET",
				"header": [
					{
						"key": "Authorization",
						"value": "{{authorization}}"
					}
				],
				"body": {},
				"url": {
					"raw": "https://api.gojekapi.com/gojek/v2/booking/history/USER_ID",
					"protocol": "https",
					"host": [
						"api",
						"gojekapi",
						"com"
					],
					"path": [
						"gojek",
						"v2",
						"booking",
						"history",
						"USER_ID"
					]
				}
			},
			"response": []
		}
	]
}
