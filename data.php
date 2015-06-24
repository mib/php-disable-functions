<?php

return array (
  'all' => 'apache_child_terminate,apache_get_modules,apache_get_version,apache_getenv,apache_lookup_uri,apache_note,apache_request_headers,apache_reset_timeout,apache_response_headers,apache_setenv,getallheaders,virtual,chdir,chroot,exec,passthru,proc_close,proc_get_status,proc_nice,proc_open,proc_terminate,shell_exec,system,chgrp,chown,disk_free_space,disk_total_space,diskfreespace,filegroup,fileinode,fileowner,lchgrp,lchown,link,linkinfo,lstat,pclose,popen,readlink,symlink,umask,cli_get_process_title,cli_set_process_title,dl,gc_collect_cycles,gc_disable,gc_enable,get_current_user,getmygid,getmyinode,getmypid,getmyuid,php_ini_loaded_file,php_ini_scanned_files,php_logo_guid,php_sapi_name,php_uname,sys_get_temp_dir,zend_logo_guid,zend_thread_id,highlight_file,php_check_syntax,show_source,sys_getloadavg,closelog,define_syslog_variables,openlog,pfsockopen,syslog,nsapi_request_headers,nsapi_response_headers,nsapi_virtual,pcntl_alarm,pcntl_errno,pcntl_exec,pcntl_fork,pcntl_get_last_error,pcntl_getpriority,pcntl_setpriority,pcntl_signal_dispatch,pcntl_signal,pcntl_sigprocmask,pcntl_sigtimedwait,pcntl_sigwaitinfo,pcntl_strerror,pcntl_wait,pcntl_waitpid,pcntl_wexitstatus,pcntl_wifexited,pcntl_wifsignaled,pcntl_wifstopped,pcntl_wstopsig,pcntl_wtermsig,posix_access,posix_ctermid,posix_errno,posix_get_last_error,posix_getcwd,posix_getegid,posix_geteuid,posix_getgid,posix_getgrgid,posix_getgrnam,posix_getgroups,posix_getlogin,posix_getpgid,posix_getpgrp,posix_getpid,posix_getppid,posix_getpwnam,posix_getpwuid,posix_getrlimit,posix_getsid,posix_getuid,posix_initgroups,posix_isatty,posix_kill,posix_mkfifo,posix_mknod,posix_setegid,posix_seteuid,posix_setgid,posix_setpgid,posix_setsid,posix_setuid,posix_strerror,posix_times,posix_ttyname,posix_uname,setproctitle,setthreadtitle,shmop_close,shmop_delete,shmop_open,shmop_read,shmop_size,shmop_write',
  'groups' => 
  array (
    'apache' => 
    array (
      'id' => 'apache',
      'name' => 'Apache Functions',
      'link' => 'ref.apache.php',
      'functions' => 
      array (
        'apache_child_terminate' => 
        array (
          'name' => 'apache_child_terminate',
          'link' => 'function.apache-child-terminate.php',
          'desc' => 'Terminate apache process after this request',
        ),
        'apache_get_modules' => 
        array (
          'name' => 'apache_get_modules',
          'link' => 'function.apache-get-modules.php',
          'desc' => 'Get a list of loaded Apache modules',
        ),
        'apache_get_version' => 
        array (
          'name' => 'apache_get_version',
          'link' => 'function.apache-get-version.php',
          'desc' => 'Fetch Apache version',
        ),
        'apache_getenv' => 
        array (
          'name' => 'apache_getenv',
          'link' => 'function.apache-getenv.php',
          'desc' => 'Get an Apache subprocess_env variable',
        ),
        'apache_lookup_uri' => 
        array (
          'name' => 'apache_lookup_uri',
          'link' => 'function.apache-lookup-uri.php',
          'desc' => 'Perform a partial request for the specified URI and return all info about it',
        ),
        'apache_note' => 
        array (
          'name' => 'apache_note',
          'link' => 'function.apache-note.php',
          'desc' => 'Get and set apache request notes',
        ),
        'apache_request_headers' => 
        array (
          'name' => 'apache_request_headers',
          'link' => 'function.apache-request-headers.php',
          'desc' => 'Fetch all HTTP request headers',
        ),
        'apache_reset_timeout' => 
        array (
          'name' => 'apache_reset_timeout',
          'link' => 'function.apache-reset-timeout.php',
          'desc' => 'Reset the Apache write timer',
        ),
        'apache_response_headers' => 
        array (
          'name' => 'apache_response_headers',
          'link' => 'function.apache-response-headers.php',
          'desc' => 'Fetch all HTTP response headers',
        ),
        'apache_setenv' => 
        array (
          'name' => 'apache_setenv',
          'link' => 'function.apache-setenv.php',
          'desc' => 'Set an Apache subprocess_env variable',
        ),
        'getallheaders' => 
        array (
          'name' => 'getallheaders',
          'link' => 'function.getallheaders.php',
          'desc' => 'Fetch all HTTP request headers',
        ),
        'virtual' => 
        array (
          'name' => 'virtual',
          'link' => 'function.virtual.php',
          'desc' => 'Perform an Apache sub-request',
        ),
      ),
    ),
    'dir' => 
    array (
      'id' => 'dir',
      'name' => 'Directory Functions',
      'link' => 'ref.dir.php',
      'functions' => 
      array (
        'chdir' => 
        array (
          'name' => 'chdir',
          'link' => 'function.chdir.php',
          'desc' => 'Change directory',
        ),
        'chroot' => 
        array (
          'name' => 'chroot',
          'link' => 'function.chroot.php',
          'desc' => 'Change the root directory',
        ),
      ),
    ),
    'exec' => 
    array (
      'id' => 'exec',
      'name' => 'Program execution Functions',
      'link' => 'ref.exec.php',
      'functions' => 
      array (
        'exec' => 
        array (
          'name' => 'exec',
          'link' => 'function.exec.php',
          'desc' => 'Execute an external program',
        ),
        'passthru' => 
        array (
          'name' => 'passthru',
          'link' => 'function.passthru.php',
          'desc' => 'Execute an external program and display raw output',
        ),
        'proc_close' => 
        array (
          'name' => 'proc_close',
          'link' => 'function.proc-close.php',
          'desc' => 'Close a process opened by proc_open and return the exit code of that process',
        ),
        'proc_get_status' => 
        array (
          'name' => 'proc_get_status',
          'link' => 'function.proc-get-status.php',
          'desc' => 'Get information about a process opened by proc_open',
        ),
        'proc_nice' => 
        array (
          'name' => 'proc_nice',
          'link' => 'function.proc-nice.php',
          'desc' => 'Change the priority of the current process',
        ),
        'proc_open' => 
        array (
          'name' => 'proc_open',
          'link' => 'function.proc-open.php',
          'desc' => 'Execute a command and open file pointers for input/output',
        ),
        'proc_terminate' => 
        array (
          'name' => 'proc_terminate',
          'link' => 'function.proc-terminate.php',
          'desc' => 'Kills a process opened by proc_open',
        ),
        'shell_exec' => 
        array (
          'name' => 'shell_exec',
          'link' => 'function.shell-exec.php',
          'desc' => 'Execute command via shell and return the complete output as a string',
        ),
        'system' => 
        array (
          'name' => 'system',
          'link' => 'function.system.php',
          'desc' => 'Execute an external program and display the output',
        ),
      ),
    ),
    'filesystem' => 
    array (
      'id' => 'filesystem',
      'name' => 'Filesystem Functions',
      'link' => 'ref.filesystem.php',
      'functions' => 
      array (
        'chgrp' => 
        array (
          'name' => 'chgrp',
          'link' => 'function.chgrp.php',
          'desc' => 'Changes file group',
        ),
        'chown' => 
        array (
          'name' => 'chown',
          'link' => 'function.chown.php',
          'desc' => 'Changes file owner',
        ),
        'disk_free_space' => 
        array (
          'name' => 'disk_free_space',
          'link' => 'function.disk-free-space.php',
          'desc' => 'Returns available space on filesystem or disk partition',
        ),
        'disk_total_space' => 
        array (
          'name' => 'disk_total_space',
          'link' => 'function.disk-total-space.php',
          'desc' => 'Returns the total size of a filesystem or disk partition',
        ),
        'diskfreespace' => 
        array (
          'name' => 'diskfreespace',
          'link' => 'function.diskfreespace.php',
          'desc' => 'Alias of disk_free_space',
        ),
        'filegroup' => 
        array (
          'name' => 'filegroup',
          'link' => 'function.filegroup.php',
          'desc' => 'Gets file group',
        ),
        'fileinode' => 
        array (
          'name' => 'fileinode',
          'link' => 'function.fileinode.php',
          'desc' => 'Gets file inode',
        ),
        'fileowner' => 
        array (
          'name' => 'fileowner',
          'link' => 'function.fileowner.php',
          'desc' => 'Gets file owner',
        ),
        'lchgrp' => 
        array (
          'name' => 'lchgrp',
          'link' => 'function.lchgrp.php',
          'desc' => 'Changes group ownership of symlink',
        ),
        'lchown' => 
        array (
          'name' => 'lchown',
          'link' => 'function.lchown.php',
          'desc' => 'Changes user ownership of symlink',
        ),
        'link' => 
        array (
          'name' => 'link',
          'link' => 'function.link.php',
          'desc' => 'Create a hard link',
        ),
        'linkinfo' => 
        array (
          'name' => 'linkinfo',
          'link' => 'function.linkinfo.php',
          'desc' => 'Gets information about a link',
        ),
        'lstat' => 
        array (
          'name' => 'lstat',
          'link' => 'function.lstat.php',
          'desc' => 'Gives information about a file or symbolic link',
        ),
        'pclose' => 
        array (
          'name' => 'pclose',
          'link' => 'function.pclose.php',
          'desc' => 'Closes process file pointer',
        ),
        'popen' => 
        array (
          'name' => 'popen',
          'link' => 'function.popen.php',
          'desc' => 'Opens process file pointer',
        ),
        'readlink' => 
        array (
          'name' => 'readlink',
          'link' => 'function.readlink.php',
          'desc' => 'Returns the target of a symbolic link',
        ),
        'symlink' => 
        array (
          'name' => 'symlink',
          'link' => 'function.symlink.php',
          'desc' => 'Creates a symbolic link',
        ),
        'umask' => 
        array (
          'name' => 'umask',
          'link' => 'function.umask.php',
          'desc' => 'Changes the current umask',
        ),
      ),
    ),
    'info' => 
    array (
      'id' => 'info',
      'name' => 'PHP Options/Info Functions',
      'link' => 'ref.info.php',
      'functions' => 
      array (
        'cli_get_process_title' => 
        array (
          'name' => 'cli_get_process_title',
          'link' => 'function.cli-get-process-title.php',
          'desc' => 'Returns the current process title',
        ),
        'cli_set_process_title' => 
        array (
          'name' => 'cli_set_process_title',
          'link' => 'function.cli-set-process-title.php',
          'desc' => 'Sets the process title',
        ),
        'dl' => 
        array (
          'name' => 'dl',
          'link' => 'function.dl.php',
          'desc' => 'Loads a PHP extension at runtime',
        ),
        'gc_collect_cycles' => 
        array (
          'name' => 'gc_collect_cycles',
          'link' => 'function.gc-collect-cycles.php',
          'desc' => 'Forces collection of any existing garbage cycles',
        ),
        'gc_disable' => 
        array (
          'name' => 'gc_disable',
          'link' => 'function.gc-disable.php',
          'desc' => 'Deactivates the circular reference collector',
        ),
        'gc_enable' => 
        array (
          'name' => 'gc_enable',
          'link' => 'function.gc-enable.php',
          'desc' => 'Activates the circular reference collector',
        ),
        'get_current_user' => 
        array (
          'name' => 'get_current_user',
          'link' => 'function.get-current-user.php',
          'desc' => 'Gets the name of the owner of the current PHP script',
        ),
        'getmygid' => 
        array (
          'name' => 'getmygid',
          'link' => 'function.getmygid.php',
          'desc' => 'Get PHP script owner\'s GID',
        ),
        'getmyinode' => 
        array (
          'name' => 'getmyinode',
          'link' => 'function.getmyinode.php',
          'desc' => 'Gets the inode of the current script',
        ),
        'getmypid' => 
        array (
          'name' => 'getmypid',
          'link' => 'function.getmypid.php',
          'desc' => 'Gets PHP\'s process ID',
        ),
        'getmyuid' => 
        array (
          'name' => 'getmyuid',
          'link' => 'function.getmyuid.php',
          'desc' => 'Gets PHP script owner\'s UID',
        ),
        'php_ini_loaded_file' => 
        array (
          'name' => 'php_ini_loaded_file',
          'link' => 'function.php-ini-loaded-file.php',
          'desc' => 'Retrieve a path to the loaded php.ini file',
        ),
        'php_ini_scanned_files' => 
        array (
          'name' => 'php_ini_scanned_files',
          'link' => 'function.php-ini-scanned-files.php',
          'desc' => 'Return a list of .ini files parsed from the additional ini dir',
        ),
        'php_logo_guid' => 
        array (
          'name' => 'php_logo_guid',
          'link' => 'function.php-logo-guid.php',
          'desc' => 'Gets the logo guid',
        ),
        'php_sapi_name' => 
        array (
          'name' => 'php_sapi_name',
          'link' => 'function.php-sapi-name.php',
          'desc' => 'Returns the type of interface between web server and PHP',
        ),
        'php_uname' => 
        array (
          'name' => 'php_uname',
          'link' => 'function.php-uname.php',
          'desc' => 'Returns information about the operating system PHP is running on',
        ),
        'sys_get_temp_dir' => 
        array (
          'name' => 'sys_get_temp_dir',
          'link' => 'function.sys-get-temp-dir.php',
          'desc' => 'Returns directory path used for temporary files',
        ),
        'zend_logo_guid' => 
        array (
          'name' => 'zend_logo_guid',
          'link' => 'function.zend-logo-guid.php',
          'desc' => 'Gets the Zend guid',
        ),
        'zend_thread_id' => 
        array (
          'name' => 'zend_thread_id',
          'link' => 'function.zend-thread-id.php',
          'desc' => 'Returns a unique identifier for the current thread',
        ),
      ),
    ),
    'misc' => 
    array (
      'id' => 'misc',
      'name' => 'Misc. Functions',
      'link' => 'ref.misc.php',
      'functions' => 
      array (
        'highlight_file' => 
        array (
          'name' => 'highlight_file',
          'link' => 'function.highlight-file.php',
          'desc' => 'Syntax highlighting of a file',
        ),
        'php_check_syntax' => 
        array (
          'name' => 'php_check_syntax',
          'link' => 'function.php-check-syntax.php',
          'desc' => 'Check the PHP syntax of (and execute) the specified file',
        ),
        'show_source' => 
        array (
          'name' => 'show_source',
          'link' => 'function.show-source.php',
          'desc' => 'Alias of highlight_file',
        ),
        'sys_getloadavg' => 
        array (
          'name' => 'sys_getloadavg',
          'link' => 'function.sys-getloadavg.php',
          'desc' => 'Gets system load average',
        ),
      ),
    ),
    'network' => 
    array (
      'id' => 'network',
      'name' => 'Network Functions',
      'link' => 'ref.network.php',
      'functions' => 
      array (
        'closelog' => 
        array (
          'name' => 'closelog',
          'link' => 'function.closelog.php',
          'desc' => 'Close connection to system logger',
        ),
        'define_syslog_variables' => 
        array (
          'name' => 'define_syslog_variables',
          'link' => 'function.define-syslog-variables.php',
          'desc' => 'Initializes all syslog related variables',
        ),
        'openlog' => 
        array (
          'name' => 'openlog',
          'link' => 'function.openlog.php',
          'desc' => 'Open connection to system logger',
        ),
        'pfsockopen' => 
        array (
          'name' => 'pfsockopen',
          'link' => 'function.pfsockopen.php',
          'desc' => 'Open persistent Internet or Unix domain socket connection',
        ),
        'syslog' => 
        array (
          'name' => 'syslog',
          'link' => 'function.syslog.php',
          'desc' => 'Generate a system log message',
        ),
      ),
    ),
    'nsapi' => 
    array (
      'id' => 'nsapi',
      'name' => 'NSAPI Functions',
      'link' => 'ref.nsapi.php',
      'functions' => 
      array (
        'nsapi_request_headers' => 
        array (
          'name' => 'nsapi_request_headers',
          'link' => 'function.nsapi-request-headers.php',
          'desc' => 'Fetch all HTTP request headers',
        ),
        'nsapi_response_headers' => 
        array (
          'name' => 'nsapi_response_headers',
          'link' => 'function.nsapi-response-headers.php',
          'desc' => 'Fetch all HTTP response headers',
        ),
        'nsapi_virtual' => 
        array (
          'name' => 'nsapi_virtual',
          'link' => 'function.nsapi-virtual.php',
          'desc' => 'Perform an NSAPI sub-request',
        ),
      ),
    ),
    'pcntl' => 
    array (
      'id' => 'pcntl',
      'name' => 'PCNTL Functions',
      'link' => 'ref.pcntl.php',
      'functions' => 
      array (
        'pcntl_alarm' => 
        array (
          'name' => 'pcntl_alarm',
          'link' => 'function.pcntl-alarm.php',
          'desc' => 'Set an alarm clock for delivery of a signal',
        ),
        'pcntl_errno' => 
        array (
          'name' => 'pcntl_errno',
          'link' => 'function.pcntl-errno.php',
          'desc' => 'Alias of pcntl_strerror',
        ),
        'pcntl_exec' => 
        array (
          'name' => 'pcntl_exec',
          'link' => 'function.pcntl-exec.php',
          'desc' => 'Executes specified program in current process space',
        ),
        'pcntl_fork' => 
        array (
          'name' => 'pcntl_fork',
          'link' => 'function.pcntl-fork.php',
          'desc' => 'Forks the currently running process',
        ),
        'pcntl_get_last_error' => 
        array (
          'name' => 'pcntl_get_last_error',
          'link' => 'function.pcntl-get-last-error.php',
          'desc' => 'Retrieve the error number set by the last pcntl function which failed',
        ),
        'pcntl_getpriority' => 
        array (
          'name' => 'pcntl_getpriority',
          'link' => 'function.pcntl-getpriority.php',
          'desc' => 'Get the priority of any process',
        ),
        'pcntl_setpriority' => 
        array (
          'name' => 'pcntl_setpriority',
          'link' => 'function.pcntl-setpriority.php',
          'desc' => 'Change the priority of any process',
        ),
        'pcntl_signal_dispatch' => 
        array (
          'name' => 'pcntl_signal_dispatch',
          'link' => 'function.pcntl-signal-dispatch.php',
          'desc' => 'Calls signal handlers for pending signals',
        ),
        'pcntl_signal' => 
        array (
          'name' => 'pcntl_signal',
          'link' => 'function.pcntl-signal.php',
          'desc' => 'Installs a signal handler',
        ),
        'pcntl_sigprocmask' => 
        array (
          'name' => 'pcntl_sigprocmask',
          'link' => 'function.pcntl-sigprocmask.php',
          'desc' => 'Sets and retrieves blocked signals',
        ),
        'pcntl_sigtimedwait' => 
        array (
          'name' => 'pcntl_sigtimedwait',
          'link' => 'function.pcntl-sigtimedwait.php',
          'desc' => 'Waits for signals, with a timeout',
        ),
        'pcntl_sigwaitinfo' => 
        array (
          'name' => 'pcntl_sigwaitinfo',
          'link' => 'function.pcntl-sigwaitinfo.php',
          'desc' => 'Waits for signals',
        ),
        'pcntl_strerror' => 
        array (
          'name' => 'pcntl_strerror',
          'link' => 'function.pcntl-strerror.php',
          'desc' => 'Retrieve the system error message associated with the given errno',
        ),
        'pcntl_wait' => 
        array (
          'name' => 'pcntl_wait',
          'link' => 'function.pcntl-wait.php',
          'desc' => 'Waits on or returns the status of a forked child',
        ),
        'pcntl_waitpid' => 
        array (
          'name' => 'pcntl_waitpid',
          'link' => 'function.pcntl-waitpid.php',
          'desc' => 'Waits on or returns the status of a forked child',
        ),
        'pcntl_wexitstatus' => 
        array (
          'name' => 'pcntl_wexitstatus',
          'link' => 'function.pcntl-wexitstatus.php',
          'desc' => 'Returns the return code of a terminated child',
        ),
        'pcntl_wifexited' => 
        array (
          'name' => 'pcntl_wifexited',
          'link' => 'function.pcntl-wifexited.php',
          'desc' => 'Checks if status code represents a normal exit',
        ),
        'pcntl_wifsignaled' => 
        array (
          'name' => 'pcntl_wifsignaled',
          'link' => 'function.pcntl-wifsignaled.php',
          'desc' => 'Checks whether the status code represents a termination due to a signal',
        ),
        'pcntl_wifstopped' => 
        array (
          'name' => 'pcntl_wifstopped',
          'link' => 'function.pcntl-wifstopped.php',
          'desc' => 'Checks whether the child process is currently stopped',
        ),
        'pcntl_wstopsig' => 
        array (
          'name' => 'pcntl_wstopsig',
          'link' => 'function.pcntl-wstopsig.php',
          'desc' => 'Returns the signal which caused the child to stop',
        ),
        'pcntl_wtermsig' => 
        array (
          'name' => 'pcntl_wtermsig',
          'link' => 'function.pcntl-wtermsig.php',
          'desc' => 'Returns the signal which caused the child to terminate',
        ),
      ),
    ),
    'posix' => 
    array (
      'id' => 'posix',
      'name' => 'POSIX Functions',
      'link' => 'ref.posix.php',
      'functions' => 
      array (
        'posix_access' => 
        array (
          'name' => 'posix_access',
          'link' => 'function.posix-access.php',
          'desc' => 'Determine accessibility of a file',
        ),
        'posix_ctermid' => 
        array (
          'name' => 'posix_ctermid',
          'link' => 'function.posix-ctermid.php',
          'desc' => 'Get path name of controlling terminal',
        ),
        'posix_errno' => 
        array (
          'name' => 'posix_errno',
          'link' => 'function.posix-errno.php',
          'desc' => 'Alias of posix_get_last_error',
        ),
        'posix_get_last_error' => 
        array (
          'name' => 'posix_get_last_error',
          'link' => 'function.posix-get-last-error.php',
          'desc' => 'Retrieve the error number set by the last posix function that failed',
        ),
        'posix_getcwd' => 
        array (
          'name' => 'posix_getcwd',
          'link' => 'function.posix-getcwd.php',
          'desc' => 'Pathname of current directory',
        ),
        'posix_getegid' => 
        array (
          'name' => 'posix_getegid',
          'link' => 'function.posix-getegid.php',
          'desc' => 'Return the effective group ID of the current process',
        ),
        'posix_geteuid' => 
        array (
          'name' => 'posix_geteuid',
          'link' => 'function.posix-geteuid.php',
          'desc' => 'Return the effective user ID of the current process',
        ),
        'posix_getgid' => 
        array (
          'name' => 'posix_getgid',
          'link' => 'function.posix-getgid.php',
          'desc' => 'Return the real group ID of the current process',
        ),
        'posix_getgrgid' => 
        array (
          'name' => 'posix_getgrgid',
          'link' => 'function.posix-getgrgid.php',
          'desc' => 'Return info about a group by group id',
        ),
        'posix_getgrnam' => 
        array (
          'name' => 'posix_getgrnam',
          'link' => 'function.posix-getgrnam.php',
          'desc' => 'Return info about a group by name',
        ),
        'posix_getgroups' => 
        array (
          'name' => 'posix_getgroups',
          'link' => 'function.posix-getgroups.php',
          'desc' => 'Return the group set of the current process',
        ),
        'posix_getlogin' => 
        array (
          'name' => 'posix_getlogin',
          'link' => 'function.posix-getlogin.php',
          'desc' => 'Return login name',
        ),
        'posix_getpgid' => 
        array (
          'name' => 'posix_getpgid',
          'link' => 'function.posix-getpgid.php',
          'desc' => 'Get process group id for job control',
        ),
        'posix_getpgrp' => 
        array (
          'name' => 'posix_getpgrp',
          'link' => 'function.posix-getpgrp.php',
          'desc' => 'Return the current process group identifier',
        ),
        'posix_getpid' => 
        array (
          'name' => 'posix_getpid',
          'link' => 'function.posix-getpid.php',
          'desc' => 'Return the current process identifier',
        ),
        'posix_getppid' => 
        array (
          'name' => 'posix_getppid',
          'link' => 'function.posix-getppid.php',
          'desc' => 'Return the parent process identifier',
        ),
        'posix_getpwnam' => 
        array (
          'name' => 'posix_getpwnam',
          'link' => 'function.posix-getpwnam.php',
          'desc' => 'Return info about a user by username',
        ),
        'posix_getpwuid' => 
        array (
          'name' => 'posix_getpwuid',
          'link' => 'function.posix-getpwuid.php',
          'desc' => 'Return info about a user by user id',
        ),
        'posix_getrlimit' => 
        array (
          'name' => 'posix_getrlimit',
          'link' => 'function.posix-getrlimit.php',
          'desc' => 'Return info about system resource limits',
        ),
        'posix_getsid' => 
        array (
          'name' => 'posix_getsid',
          'link' => 'function.posix-getsid.php',
          'desc' => 'Get the current sid of the process',
        ),
        'posix_getuid' => 
        array (
          'name' => 'posix_getuid',
          'link' => 'function.posix-getuid.php',
          'desc' => 'Return the real user ID of the current process',
        ),
        'posix_initgroups' => 
        array (
          'name' => 'posix_initgroups',
          'link' => 'function.posix-initgroups.php',
          'desc' => 'Calculate the group access list',
        ),
        'posix_isatty' => 
        array (
          'name' => 'posix_isatty',
          'link' => 'function.posix-isatty.php',
          'desc' => 'Determine if a file descriptor is an interactive terminal',
        ),
        'posix_kill' => 
        array (
          'name' => 'posix_kill',
          'link' => 'function.posix-kill.php',
          'desc' => 'Send a signal to a process',
        ),
        'posix_mkfifo' => 
        array (
          'name' => 'posix_mkfifo',
          'link' => 'function.posix-mkfifo.php',
          'desc' => 'Create a fifo special file (a named pipe)',
        ),
        'posix_mknod' => 
        array (
          'name' => 'posix_mknod',
          'link' => 'function.posix-mknod.php',
          'desc' => 'Create a special or ordinary file (POSIX.1)',
        ),
        'posix_setegid' => 
        array (
          'name' => 'posix_setegid',
          'link' => 'function.posix-setegid.php',
          'desc' => 'Set the effective GID of the current process',
        ),
        'posix_seteuid' => 
        array (
          'name' => 'posix_seteuid',
          'link' => 'function.posix-seteuid.php',
          'desc' => 'Set the effective UID of the current process',
        ),
        'posix_setgid' => 
        array (
          'name' => 'posix_setgid',
          'link' => 'function.posix-setgid.php',
          'desc' => 'Set the GID of the current process',
        ),
        'posix_setpgid' => 
        array (
          'name' => 'posix_setpgid',
          'link' => 'function.posix-setpgid.php',
          'desc' => 'Set process group id for job control',
        ),
        'posix_setsid' => 
        array (
          'name' => 'posix_setsid',
          'link' => 'function.posix-setsid.php',
          'desc' => 'Make the current process a session leader',
        ),
        'posix_setuid' => 
        array (
          'name' => 'posix_setuid',
          'link' => 'function.posix-setuid.php',
          'desc' => 'Set the UID of the current process',
        ),
        'posix_strerror' => 
        array (
          'name' => 'posix_strerror',
          'link' => 'function.posix-strerror.php',
          'desc' => 'Retrieve the system error message associated with the given errno',
        ),
        'posix_times' => 
        array (
          'name' => 'posix_times',
          'link' => 'function.posix-times.php',
          'desc' => 'Get process times',
        ),
        'posix_ttyname' => 
        array (
          'name' => 'posix_ttyname',
          'link' => 'function.posix-ttyname.php',
          'desc' => 'Determine terminal device name',
        ),
        'posix_uname' => 
        array (
          'name' => 'posix_uname',
          'link' => 'function.posix-uname.php',
          'desc' => 'Get system name',
        ),
      ),
    ),
    'proctitle' => 
    array (
      'id' => 'proctitle',
      'name' => 'Proctitle Functions',
      'link' => 'ref.proctitle.php',
      'functions' => 
      array (
        'setproctitle' => 
        array (
          'name' => 'setproctitle',
          'link' => 'function.setproctitle.php',
          'desc' => 'Set the process title',
        ),
        'setthreadtitle' => 
        array (
          'name' => 'setthreadtitle',
          'link' => 'function.setthreadtitle.php',
          'desc' => 'Set the thread title',
        ),
      ),
    ),
    'shmop' => 
    array (
      'id' => 'shmop',
      'name' => 'Shared Memory Functions',
      'link' => 'ref.shmop.php',
      'functions' => 
      array (
        'shmop_close' => 
        array (
          'name' => 'shmop_close',
          'link' => 'function.shmop-close.php',
          'desc' => 'Close shared memory block',
        ),
        'shmop_delete' => 
        array (
          'name' => 'shmop_delete',
          'link' => 'function.shmop-delete.php',
          'desc' => 'Delete shared memory block',
        ),
        'shmop_open' => 
        array (
          'name' => 'shmop_open',
          'link' => 'function.shmop-open.php',
          'desc' => 'Create or open shared memory block',
        ),
        'shmop_read' => 
        array (
          'name' => 'shmop_read',
          'link' => 'function.shmop-read.php',
          'desc' => 'Read data from shared memory block',
        ),
        'shmop_size' => 
        array (
          'name' => 'shmop_size',
          'link' => 'function.shmop-size.php',
          'desc' => 'Get size of shared memory block',
        ),
        'shmop_write' => 
        array (
          'name' => 'shmop_write',
          'link' => 'function.shmop-write.php',
          'desc' => 'Write data into shared memory block',
        ),
      ),
    ),
  ),
);
