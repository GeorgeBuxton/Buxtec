(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
// JavaScript Document

// React app.js document


// JavaScript Document -- main.js

// menu icon role over
function menuOver() {
    document.getElementById("menu").src = "images/menu-over.svg";
}

function menuOut() {
    document.getElementById("menu").src = "images/menu-open.svg";
}
function menuWhiteOver() {
    document.getElementById("menu").src = "images/menu-white-over.svg";
}

function menuWhiteOut() {
    document.getElementById("menu").src = "images/menu-white-open.svg";
}
function menuBgOver() {
    document.getElementById("menu").src = "images/menu-bg-over.svg";
}

function menuBgOut() {
    document.getElementById("menu").src = "images/menu-bg-open.svg";
}

function openmenu() {
	document.getElementById("pagemenu").style = "z-index: 60;";
}

function openpage(currentpage, targetpage) {
	document.getElementById(targetpage).style = "z-index: 50; width: 100vw;";
	document.getElementById(currentpage).style = "z-index: 40; width: 0vw;";
}

// Intro text role over
function mouseOver() {
    document.getElementById("message").innerHTML = "and live the dream.";
}

function mouseOut() {
   	document.getElementById("message").innerHTML = "Another day in paradise.";
}

// Project
// project image view change
function imageOrder() {
	var x = document.getElementById("myImgFirst").src;
	document.getElementById("myImgFirst").style = "z-index: 2;";
	var y = document.getElementById("myImgSecond").src;
	document.getElementById("myImgSecond").style = "z-index: 1;";
}
function imageOrderBack() {
	var x = document.getElementById("myImgFirst").src;
	document.getElementById("myImgFirst").style = "z-index: 1;";
	var y = document.getElementById("myImgSecond").src;
	document.getElementById("myImgSecond").style = "z-index: 2;";
}

//  Next Project icon role over
function nextprojectOver() {
    document.getElementById("arrowicon").src = "images/trangle-icon_blue.svg";
}

function nextprojectOut() {
    document.getElementById("arrowicon").src = "images/trangle-icon_grey.svg";
}


},{}]},{},[1])