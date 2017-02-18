-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 05:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smet_core_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `comments` text,
  `created_date` datetime DEFAULT NULL,
  `is_email_sent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_data`
--

CREATE TABLE `project_data` (
  `project_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `domain` enum('health_care','banking_system','financial','mobile applications','games','websites') NOT NULL,
  `project_type` enum('for_client','product_base','in_house') NOT NULL,
  `project_location` enum('onsite','offshore') NOT NULL,
  `technologies` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `total_resources` int(11) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `is_colocated` tinyint(1) NOT NULL,
  `roles` text NOT NULL,
  `is_conflict_resolution_process_exists` int(11) NOT NULL,
  `num_of_figures_in_cres_process` int(11) NOT NULL,
  `num_of_sec_in_cres_process` int(11) NOT NULL,
  `num_of_tbl_in_cres_process` int(11) NOT NULL,
  `is_cres_process_shared` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for saving project data of SMET sytem projects. ';

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `company_id` int(11) NOT NULL,
  `email_address` varchar(45) DEFAULT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for registration of new company in SMET system.';

-- --------------------------------------------------------

--
-- Table structure for table `scrum_artifacts`
--

CREATE TABLE `scrum_artifacts` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `is_prod_backlog_exists` tinyint(1) DEFAULT NULL,
  `items_product_backlog` int(11) DEFAULT NULL,
  `prod_backlog_prioritize` enum('product_owner','project_manager','scrum_master','development_team') DEFAULT NULL,
  `prod_backlog_updated` enum('product_owner','project_manager','scrum_master','development_team') DEFAULT NULL,
  `prod_backlog_updated_time` text,
  `prod_backlog_estimation` enum('product_owner','project_manager','scrum_master','development_team') DEFAULT NULL,
  `is_sprint_backlog_exists` tinyint(1) DEFAULT NULL,
  `sprint_backlog_parts` text,
  `sprint_backlog_changes` text,
  `sprint_change_requests` int(11) DEFAULT NULL,
  `sprint_progress_tracking` text,
  `is_acceptance_criteria_defined` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scrum_events`
--

CREATE TABLE `scrum_events` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `sprint_duration` int(11) DEFAULT NULL,
  `num_of_planned_items` int(11) DEFAULT NULL,
  `num_of_delivered_items` int(11) DEFAULT NULL,
  `number_of_change_request` int(11) DEFAULT NULL,
  `responsible_to_negotiate_scope` enum('product_owner','scrum_master','development_team','product_manager') DEFAULT NULL,
  `is_sprint_goal_achieved` tinyint(1) DEFAULT NULL,
  `is_increment_done` tinyint(1) DEFAULT NULL,
  `scrum_backlog_items` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `sprint_backlog_management` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `is_sprint_planning_done` tinyint(1) DEFAULT NULL,
  `planning_meeting_duration` int(11) DEFAULT NULL,
  `head_of_planning_meeting` varchar(50) DEFAULT NULL,
  `selected_items_in_meeting` int(11) DEFAULT NULL,
  `items_decided_by_whom` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `meeting_inputs` text,
  `is_sprint_goal_created` tinyint(1) DEFAULT NULL,
  `is_sprint_backlog_created` tinyint(1) DEFAULT NULL,
  `estimation_by_whome` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `resp_for_scope_negotiation` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `decomposition_of_selected_items` text,
  `standup_duration` int(11) DEFAULT NULL,
  `is_place_time_decided_for_standup` tinyint(1) DEFAULT NULL,
  `questions_in_standup` text,
  `resp_for_standup` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `standup_participants` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `sprint_review_duration` int(11) DEFAULT NULL,
  `sprint_review_purpose` text,
  `feedback_items_for_review` int(11) DEFAULT NULL,
  `sprint_review_condution` enum('start_of_sprint','during_sprint','end_of_sprint') DEFAULT NULL,
  `review_meeting_facilitator` enum('product_owner','scrum_master') DEFAULT NULL,
  `features_demo` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `is_sprint_retro_done` tinyint(1) DEFAULT NULL,
  `sprint_retro_duration` int(11) DEFAULT NULL,
  `retro_discussion` text,
  `retro_output` text,
  `retro_scheduling` enum('product_owner','project_manager','scrum_master') DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scrum_pillars`
--

CREATE TABLE `scrum_pillars` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `is_processes_exist` tinyint(1) DEFAULT NULL,
  `no_of_figures_process` int(11) DEFAULT NULL,
  `no_of_tables_process` int(11) DEFAULT NULL,
  `no_of_sections_process` int(11) DEFAULT NULL,
  `is_process_shared` tinyint(1) DEFAULT NULL,
  `is_def_of_done_exists` tinyint(1) DEFAULT NULL,
  `communication_def_of_done` text,
  `inspect_progress_sprint_goal` text,
  `scrum_adapted` text,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scrum_team`
--

CREATE TABLE `scrum_team` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `is_prod_owner_exists` tinyint(1) DEFAULT NULL,
  `prod_owner_responsibility` text,
  `prod_owner_authority` enum('full','partial') DEFAULT NULL,
  `num_of_prod_owner` int(11) DEFAULT NULL,
  `prod_owner_type` enum('customer','customer_representer','company_representer') DEFAULT NULL,
  `dev_team_report` varchar(50) DEFAULT NULL,
  `skills_set` varchar(50) DEFAULT NULL,
  `is_subteam` int(11) DEFAULT NULL,
  `team_size` int(11) DEFAULT NULL,
  `dev_team_accountable` enum('product_owner','scrum_master','project_manager','development_team') DEFAULT NULL,
  `is_prod_owner_part_of_dev_team` tinyint(1) DEFAULT NULL,
  `is_scrum_master_exists` tinyint(1) DEFAULT NULL,
  `scrum_master_reponsibilities` text,
  `sc_master_services_dev_team` text,
  `sc_master_services_prod_owner` text,
  `sc_master_services_org` text,
  `is_scrum_master_part_of_dev_team` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills_set`
--

CREATE TABLE `skills_set` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standard_scrum_artifacts`
--

CREATE TABLE `standard_scrum_artifacts` (
  `id` int(11) NOT NULL,
  `is_prod_backlog_exists` tinyint(1) DEFAULT NULL,
  `items_product_backlog` int(11) DEFAULT NULL,
  `prod_backlog_prioritize` enum('product_owner','project_manager','scrum_master','development_team') DEFAULT NULL,
  `prod_backlog_updated` enum('product_owner','project_manager','scrum_master','development_team') DEFAULT NULL,
  `prod_backlog_updated_time` text,
  `prod_backlog_estimation` enum('product_owner','project_manager','scrum_master','development_team') DEFAULT NULL,
  `is_sprint_backlog_exists` tinyint(1) DEFAULT NULL,
  `sprint_backlog_parts` text,
  `sprint_backlog_changes` text,
  `sprint_change_requests` int(11) DEFAULT NULL,
  `sprint_progress_tracking` text,
  `is_acceptance_criteria_defined` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standard_scrum_events`
--

CREATE TABLE `standard_scrum_events` (
  `id` int(11) NOT NULL,
  `sprint_duration` int(11) DEFAULT NULL,
  `num_of_planned_items` int(11) DEFAULT NULL,
  `num_of_delivered_items` int(11) DEFAULT NULL,
  `number_of_change_request` int(11) DEFAULT NULL,
  `responsible_to_negotiate_scope` enum('product_owner','scrum_master','development_team','product_manager') DEFAULT NULL,
  `is_sprint_goal_achieved` tinyint(1) DEFAULT NULL,
  `is_increment_done` tinyint(1) DEFAULT NULL,
  `scrum_backlog_items` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `sprint_backlog_management` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `is_sprint_planning_done` tinyint(1) DEFAULT NULL,
  `planning_meeting_duration` int(11) DEFAULT NULL,
  `head_of_planning_meeting` varchar(50) DEFAULT NULL,
  `selected_items_in_meeting` int(11) DEFAULT NULL,
  `items_decided_by_whom` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `meeting_inputs` text,
  `is_sprint_goal_created` tinyint(1) DEFAULT NULL,
  `is_sprint_backlog_created` tinyint(1) DEFAULT NULL,
  `estimation_by_whome` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `resp_for_scope_negotiation` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `decomposition_of_selected_items` text,
  `standup_duration` int(11) DEFAULT NULL,
  `is_place_time_decided_for_standup` tinyint(1) DEFAULT NULL,
  `questions_in_standup` text,
  `resp_for_standup` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `standup_participants` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `sprint_review_duration` int(11) DEFAULT NULL,
  `sprint_review_purpose` text,
  `feedback_items_for_review` int(11) DEFAULT NULL,
  `sprint_review_condution` enum('start_of_sprint','during_sprint','end_of_sprint') DEFAULT NULL,
  `review_meeting_facilitator` enum('product_owner','scrum_master') DEFAULT NULL,
  `features_demo` enum('product_owner','scrum_master','development_team') DEFAULT NULL,
  `is_sprint_retro_done` tinyint(1) DEFAULT NULL,
  `sprint_retro_duration` int(11) DEFAULT NULL,
  `retro_discussion` text,
  `retro_output` text,
  `retro_scheduling` enum('product_owner','project_manager','scrum_master') DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standard_scrum_pillars`
--

CREATE TABLE `standard_scrum_pillars` (
  `id` int(11) NOT NULL,
  `is_processes_exist` tinyint(1) DEFAULT NULL,
  `no_of_figures_process` int(11) DEFAULT NULL,
  `no_of_tables_process` int(11) DEFAULT NULL,
  `no_of_sections_process` int(11) DEFAULT NULL,
  `is_process_shared` tinyint(1) DEFAULT NULL,
  `is_def_of_done_exists` tinyint(1) DEFAULT NULL,
  `communication_def_of_done` text,
  `inspect_progress_sprint_goal` text,
  `scrum_adapted` text,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standard_scrum_team`
--

CREATE TABLE `standard_scrum_team` (
  `id` int(11) NOT NULL,
  `is_prod_owner_exists` tinyint(1) DEFAULT NULL,
  `prod_owner_responsibility` text,
  `prod_owner_authority` enum('full','partial') DEFAULT NULL,
  `num_of_prod_owner` int(11) DEFAULT NULL,
  `prod_owner_type` enum('customer','customer_representer','company_representer') DEFAULT NULL,
  `dev_team_report` varchar(50) DEFAULT NULL,
  `skills_set` varchar(50) DEFAULT NULL,
  `is_subteam` int(11) DEFAULT NULL,
  `team_size` int(11) DEFAULT NULL,
  `dev_team_accountable` enum('product_owner','scrum_master','project_manager','development_team') DEFAULT NULL,
  `is_prod_owner_part_of_dev_team` tinyint(1) DEFAULT NULL,
  `is_scrum_master_exists` tinyint(1) DEFAULT NULL,
  `scrum_master_reponsibilities` text,
  `sc_master_services_dev_team` text,
  `sc_master_services_prod_owner` text,
  `sc_master_services_org` text,
  `is_scrum_master_part_of_dev_team` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_data`
--
ALTER TABLE `project_data`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `scrum_artifacts`
--
ALTER TABLE `scrum_artifacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `scrum_events`
--
ALTER TABLE `scrum_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `scrum_pillars`
--
ALTER TABLE `scrum_pillars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `scrum_team`
--
ALTER TABLE `scrum_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `skills_set`
--
ALTER TABLE `skills_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_scrum_artifacts`
--
ALTER TABLE `standard_scrum_artifacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_scrum_events`
--
ALTER TABLE `standard_scrum_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_scrum_pillars`
--
ALTER TABLE `standard_scrum_pillars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_scrum_team`
--
ALTER TABLE `standard_scrum_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_data`
--
ALTER TABLE `project_data`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scrum_artifacts`
--
ALTER TABLE `scrum_artifacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scrum_events`
--
ALTER TABLE `scrum_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scrum_pillars`
--
ALTER TABLE `scrum_pillars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scrum_team`
--
ALTER TABLE `scrum_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills_set`
--
ALTER TABLE `skills_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `standard_scrum_artifacts`
--
ALTER TABLE `standard_scrum_artifacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `standard_scrum_events`
--
ALTER TABLE `standard_scrum_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `standard_scrum_pillars`
--
ALTER TABLE `standard_scrum_pillars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `standard_scrum_team`
--
ALTER TABLE `standard_scrum_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_data`
--
ALTER TABLE `project_data`
  ADD CONSTRAINT `project_data_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `registration` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scrum_artifacts`
--
ALTER TABLE `scrum_artifacts`
  ADD CONSTRAINT `scrum_artifacts_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project_data` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scrum_events`
--
ALTER TABLE `scrum_events`
  ADD CONSTRAINT `scrum_events_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project_data` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scrum_pillars`
--
ALTER TABLE `scrum_pillars`
  ADD CONSTRAINT `scrum_pillars_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project_data` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scrum_team`
--
ALTER TABLE `scrum_team`
  ADD CONSTRAINT `scrum_team_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project_data` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
