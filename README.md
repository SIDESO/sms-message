# SIDESO SMS-MESSAGE

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sideso/sms-message.svg?style=flat-square)](https://packagist.org/packages/sideso/sms-message)
[![Total Downloads](https://img.shields.io/packagist/dt/sideso/sms-message.svg?style=flat-square)](https://packagist.org/packages/sideso/sms-message)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This package provides a base class for SMS messages. It is intended to be used with the [Hablame Package](https://github.com/sideso/hablame) and future SMS providers.

## Available Message methods

`content()`: Set a content of the notification message. This parameter should be no longer than 918 char(6 message parts).

`sourceCode()`: Set the Source Code name to be used as origin.

`requestProofOfDelivery()`: Set the request proof of delivery to be used as origin (Extra cost).

`priority()`: Set the priority of the message. (True = Transactional, False = Marketing).

`flash()`: Set the if the message should be flash. (True = Flash, False = Normal).

`senDate()`: Set the date and time when the message should be sent. (Not used is priority is set to true).

`withCallback()`: Set the callback function to be executed when the message is sent.

`provider()`: Set the provider to be used to send the message.

`tags()`: Set the tags to be used along with the message.

## Available Events

`SmsSent`: This event should be fired when the message is sent.